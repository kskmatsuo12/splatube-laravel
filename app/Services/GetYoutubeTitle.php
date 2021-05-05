<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

use App\Models\Post;
use App\Models\MWeapon;
use App\Models\Channel;
use Carbon\Carbon;

class GetYoutubeTitle {
    //コマンドのYoutubeAPIの共通のやつ
    public function getTitle($channel_id)
    {
        // Googleへの接続情報のインスタンスを作成と設定
        $client = new Google_Client();
        $client->setDeveloperKey(config('services.google.key'));

        // 接続情報のインスタンスを用いてYoutubeのデータへアクセス可能なインスタンスを生成
        $youtube = new Google_Service_YouTube($client);

        $now = Carbon::parse('now','Asia/Tokyo')->format('Y-m-d\TH:i:s') . 'Z';
        $weapons = MWeapon::select('id','name')->orderBy('id','desc')->get();

        for($i = 0; $i < 20; $i++){
            $oldest = Post::where('channel_id',$channel_id)
                ->orderBy('published_at','asc')
                ->first();
            $items = $youtube->search->listSearch('snippet', [
                'channelId'  => $channel_id,
                'order'      => 'date',
                'maxResults' => 10,
                'publishedBefore' => $oldest ? $oldest->published_at : $now,
            ]);

            if(count($items)===0) break;
            foreach($items as $item){
                $youtube_id = $item['id']['videoId'];
                if(!empty($youtube_id)){
                    $post = Post::where('youtube_id',$youtube_id)->first();
                    if(empty($post)){
                        $post = new Post;
                        $post->user_id = 1;//admin=1;
                        $post->weapon_id = 140;//未選択
                        $post->youtube_id = $youtube_id;
                        $title = $item['snippet']['title'];
                        $post->title = $title;
                        $description = $item['snippet']['description'];
                        $post->description = $description;
                        $post->thumbnail = $item['snippet']['thumbnails']['medium']['url'];
                        $post->channel_id = $item['snippet']['channelId'];
                        $post->channel_name = $item['snippet']['channelTitle'];
                        $post->published_at = $item['snippet']['publishedAt'];
    
                        foreach($weapons as $weapon){
                            if(strpos($title, $weapon->name) !== false || strpos($description, $weapon->name) !== false) {
                                $post->weapon_id = $weapon->id;
                                break;
                            }
                        }
    
                        $post->save();
                    }               
                }

            }
            return;
            sleep(5);
        }
    }
}