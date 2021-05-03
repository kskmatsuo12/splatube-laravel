<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
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
                'name' => 'はんじょう',
                'channel_id' => 'UCRb4IVckX44UIDzyykek_gA'
            ],
            [
                'id' => 2,
                'name' => 'ちょこぺろ',
                'channel_id' => 'UC4BQjeEH7-iUqUbyYVDYtsg'
            ],
        ];
        DB::table('channels')->insert($data);
    }
}
