<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Google_Client;
use Google_Service_YouTube;

use App\Models\Post;
use Carbon\Carbon;

class GetYoutubeTitleCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:youtube_title';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'チャンネル名でデータをぶっこむ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Googleへの接続情報のインスタンスを作成と設定
        $client = new Google_Client();
        $client->setDeveloperKey(config('services.google.key'));

        // 接続情報のインスタンスを用いてYoutubeのデータへアクセス可能なインスタンスを生成
        $youtube = new Google_Service_YouTube($client);

        // 必要情報を引数に持たせ、listSearchで検索して動画一覧を取得
        $channel_id = 'UCRb4IVckX44UIDzyykek_gA';
        $now = Carbon::parse('now','Asia/Tokyo')->format('Y-m-d\TH:i:s') . 'Z';

        for($i = 0; $i < 20; $i++){
            $oldest = Post::where('channel_id',$channel_id)
            ->orderBy('published_at','asc')
            ->first();
            $items = $youtube->search->listSearch('snippet', [
                'channelId'  => $channel_id,
                'order'      => 'date',
                'maxResults' => 50,
                'publishedBefore' => $oldest ? $oldest->published_at : $now,
            ]);
        
            if(count($items)===0) break;

            foreach($items as $item){
                $youtube_id = $item['id']['videoId'];
                $post = Post::where('youtube_id',$youtube_id)->first();
                if(empty($post)){
                    $post = new Post;
                    $post->user_id = 1;//admin=1;
                    $post->weapon_id = 141;//未選択
                    $post->youtube_id = $youtube_id;
                    $post->title = $item['snippet']['title'];
                    $post->description = $item['snippet']['description'];
                    $post->thumbnail = $item['snippet']['thumbnails']['medium']['url'];
                    $post->channel_id = $item['snippet']['channelId'];
                    $post->channel_name = $item['snippet']['channelTitle'];
                    $post->published_at = $item['snippet']['publishedAt'];
                    $post->save();
                }
            }
            sleep(5);
        }
       
        // $video_id = '2eHK7qMINjg';
        // $api_key = config('services.google.key');
        // $get_api_url = "https://www.googleapis.com/youtube/v3/videos?id=$video_id&key=$api_key&part=snippet,contentDetails,statistics,status";
        // $json = file_get_contents($get_api_url);
        // $getData = json_decode( $json , true);
        // foreach((array)$getData['items'] as $key => $gDat){
        //     $video_title = $gDat['snippet']['title'];
        // }
        // dd($json);
    }
}
