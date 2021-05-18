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
        DB::table('channels')->delete();
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
            [
                'id' => 3,
                'name' => 'えとなch',
                'channel_id' => 'UCSmqsu-W-GIiVOVFWbxo1Dg'
            ],
            [
                'id' => 4,
                'name' => 'ねっぴー',
                'channel_id' => 'UCnVw67dYJSFHgTZizGCBFgg'
            ],
            [
                'id' => 5,
                'name' => 'まぎえーす/MAGIACE',
                'channel_id' => 'UCGNM3SNCuy5uhDX8h8FBX1g'
            ],
        ];
        DB::table('channels')->insert($data);
    }
}
