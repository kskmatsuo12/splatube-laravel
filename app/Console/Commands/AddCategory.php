<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\MWeapon;

class AddCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:add_category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '未選択カテゴリーの追加';

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
        $w = new MWeapon;
        $w->name = '未選択';
        $w->id = 141;
        $w->category_id = 0;
        $w->main_id = 0;
        $w->sub_id = 0;
        $w->special_id = 0;
        $w->save();
    }
}
