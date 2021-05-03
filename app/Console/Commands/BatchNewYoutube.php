<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\GetNewYoutubeTitle;

use Google_Client;
use Google_Service_YouTube;

use App\Models\Post;
use App\Models\MWeapon;
use App\Models\Channel;
use Carbon\Carbon;

class BatchNewYoutube extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:yesterday_youtube';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '登録しているチャンネルの昨日の動画を取得する';

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

        $yesterday = Carbon::parse('yesterday','Asia/Tokyo')->format('Y-m-d\TH:i:s') . 'Z';
        $weapons = MWeapon::select('id','name')->orderBy('id','desc')->get();

        $channels = Channel::all();

        foreach($channels as $channel){
            $channel_id = $channel->channel_id;
            $getYoutube = new GetNewYoutubeTitle;
            $getYoutube->getTitle($channel_id,$yesterday,$weapons,$youtube);
            sleep(5);
        } 
    }
}
