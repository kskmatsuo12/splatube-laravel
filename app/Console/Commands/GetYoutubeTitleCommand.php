<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\GetYoutubeTitle;

use App\Models\Post;
use App\Models\MWeapon;
use App\Models\Channel;
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
        // // Googleへの接続情報のインスタンスを作成と設定
        // $client = new Google_Client();
        // $client->setDeveloperKey(config('services.google.key'));

        // // 接続情報のインスタンスを用いてYoutubeのデータへアクセス可能なインスタンスを生成
        // $youtube = new Google_Service_YouTube($client);

        //ここに新しく取得したIDを入れるだけ

        $id = 1;
        $channel = Channel::find($id);
        $channel_id = $channel->channel_id;

        $getYoutube = new GetYoutubeTitle;
        $getYoutube->getTitle($channel_id);
       
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
