<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'シューター',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 2,
                'name' => 'マニューバー',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 3,
                'name' => 'チャージャー',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 4,
                'name' => 'ブラスター',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 5,
                'name' => 'ローラー',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 6,
                'name' => 'フデ',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 7,
                'name' => 'フロッシャー',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 8,
                'name' => 'スピナー',
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                'id' => 9,
                'name' => 'シェルター',
                "created_at" => now(),
                "updated_at" => now()
            ],
        ];

        DB::table('m_categories')->insert($data);
    }
}
