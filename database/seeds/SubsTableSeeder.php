<?php

use Illuminate\Database\Seeder;

class SubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'スプラッシュボム',
                'image_url' => '/sub/1.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'ポイントセンサー',
                'image_url' => '/sub/2.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'スプラッシュシールド',
                'image_url' => '/sub/3.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'ポイズンミスト',
                'image_url' => '/sub/4.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'ロボットボム',
                'image_url' => '/sub/5.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'キューバンボム',
                'image_url' => '/sub/6.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'クイックボム',
                'image_url' => '/sub/7.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'カーリングボム',
                'image_url' => '/sub/8.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'ジャンプビーコン',
                'image_url' => '/sub/9.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'スプリンクラー',
                'image_url' => '/sub/10.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'name' => 'トーピード',
                'image_url' => '/sub/11.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'name' => 'トラップ',
                'image_url' => '/sub/12.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'タンサンボム',
                'image_url' => '/sub/13.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('m_subs')->insert($data);
    }
}
