<?php

use Illuminate\Database\Seeder;

class SpecialsTableSeeder extends Seeder
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
                'name' => 'ジェットパック',
                'image_url' => '/special/1.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'name' => 'イカスフィア',
                'image_url' => '/special/2.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'name' => 'インクアーマー',
                'image_url' => '/special/3.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'name' => 'スーパーチャクチ',
                'image_url' => '/special/4.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'name' => 'マルチミサイル',
                'image_url' => '/special/5.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'name' => 'アメフラシ',
                'image_url' => '/special/6.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 7,
                'name' => 'キューバンボムピッチャー',
                'image_url' => '/special/7.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 8,
                'name' => 'ハイパープレッサー',
                'image_url' => '/special/8.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 9,
                'name' => 'バブルランチャー',
                'image_url' => '/special/9.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 10,
                'name' => 'カーリングボムピッチャー',
                'image_url' => '/special/10.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 11,
                'name' => 'ウルトラハンコ',
                'image_url' => '/special/11.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 12,
                'name' => 'ナイスダマ',
                'image_url' => '/special/12.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 13,
                'name' => 'ロボボムピッチャー',
                'image_url' => '/special/13.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 14,
                'name' => 'クイックボムピッチャー',
                'image_url' => '/special/14.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 15,
                'name' => 'スプラッシュボムピッチャー',
                'image_url' => '/special/15.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('m_specials')->insert($data);
    }
}
