<?php

use Illuminate\Database\Seeder;

class MainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // [
            //     'id' => 1,
            //     'name' => '',
            //     "created_at" => now(),
            //     "updated_at" => now()
            // ]
        ];

        DB::table('m_mains')->insert($data);
    }
}
