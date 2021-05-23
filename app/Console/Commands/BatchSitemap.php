<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Post;
use App\Models\MWeapon;

class BatchSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'batch:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'サイトマップの定期実行';

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
        //保存先
        $file = resource_path('views/admin/sitemap.xml');
        //初期化
        $start_content = '<?xml version="1.0" encoding="UTF-8"?>'
        .'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        \File::put($file,$start_content);
        
        //固定ページ
        $default = [
            'https://splatube.net/',
            'https://splatube.net/policy',
            'https://splatube.net/terms',
            'https://splatube.net/weapons'
        ];

        foreach($default as $d){       
            $content = "<url>
            <loc>".$d."</loc>
            <lastmod>2021-05-02</lastmod>
            </url>";
            \File::append($file,$content);
        }

        $posts = Post::all();

        foreach($posts as $post){
            $content = "<url>
            <loc>https://splatube.net/post/".$post->id."</loc>
            <lastmod>".$post->updated_at->format('Y-m-d')."</lastmod>
            </url>";
            \File::append($file,$content);
        }

        $weapons = MWeapon::all();

        //１ページに20件表示
        $per_page = 20;

        foreach($weapons as $weapon){
            $count = Post::where('weapon_id',$weapon->id)->count();
            $max_page = ceil($count / $per_page);

            $post = Post::where('weapon_id',$weapon->id)->orderBy('created_at','desc')->first();

            if(!empty($post)){
                for($i = 0; $i < $max_page; $i++){
                    if($i == 0){
                        $url = "https://splatube.net/weapon/".$weapon->name;
                    } else {
                        $url = "https://splatube.net/weapon/".$weapon->name."?page=".$i+1;
                    }
                    $content = "<url>
                    <loc>".$url."</loc>
                    <lastmod>".$post->created_at->format('Y-m-d')."</lastmod>
                    </url>";
                    \File::append($file,$content);
                }
            }
        }

        $end_content = '</urlset>';
        \File::append($file,$end_content);

        if(config('app.env') == 'production'){
            'https://www.google.com/ping?sitemap=http://enjoy.splatube.net/sitemap.xml';
        }

        \Slack::send('サイトマップの送信');
    }
}
