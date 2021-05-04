<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;

use App\Models\Post;

class GetYoutubeDescriptionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:youtube_description';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ちゃんねる名では取得できないDescriptionを取得する';

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
        $today = Carbon::today();
        $posts = Post::whereDate('created_at',$today)->get();
        $api_key = config('services.google.key');
        foreach($posts as $post){
            $video_id = $post->youtube_id;
            $get_api_url = "https://www.googleapis.com/youtube/v3/videos?id=$video_id&key=$api_key&part=snippet,contentDetails,statistics,status";
            $json = file_get_contents($get_api_url);
            $getData = json_decode( $json , true);
            foreach((array)$getData['items'] as $key => $gDat){
                $description = $gDat['snippet']['description'];
            }
            $post->description = $description;
            $post->save();
            sleep(2);
        }

        \Slack::send('新しいポストのDescriptionを取得しました。'.count($posts).'件');
    }
}
