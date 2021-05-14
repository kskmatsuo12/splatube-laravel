<?php

namespace App\Services;

use Google_Client;
use Google_Service_YouTube;

use App\Models\Post;
use App\Models\MWeapon;
use App\Models\WeaponPopularName;
use App\Models\Channel;
use Carbon\Carbon;

class GetNewYoutubeTitle {
    //コマンドのYoutubeAPIの共通のやつ
    public function getTitle($channel_id,$yesterday,$weapons,$youtube)
    {
            $latest = Post::where('channel_id',$channel_id)
                ->orderBy('published_at','desc')
                ->first();
            $items = $youtube->search->listSearch('snippet', [
                'channelId'  => $channel_id,
                'order'      => 'date',
                'maxResults' => 50,
                'publishedAfter' => $latest ? $latest->published_at : $yesterday,
            ]);
        
            foreach($items as $item){
                $youtube_id = $item['id']['videoId'];
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
                        $popular_names = WeaponPopularName::where('weapon_id',$weapon->id)->orderBy('id','desc')->get();
                            
                        foreach($popular_names as $name){
                            if(strpos($title, $name->name) !== false || strpos($description, $name->name) !== false){
                                $post->weapon_id = $weapon->id;
                                break 2;
                            }
                        }   
                    }
                    $post->save();
                }
            }
    }
}