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
            [
                'id' => 6,
                'name' => 'リオラch',
                'channel_id' => 'UCZLeZXjm_opUQFhLa4I_VFg'
            ],
            [
                'id' => 7,
                'name' => 'やんもch',
                'channel_id' => 'UC1n5554otlE3evhll_RH1Kg'
            ],
            [
                'id' => 8,
                'name' => 'ティラミスちゃんねる',
                'channel_id' => 'UCGsLewe5pUfNozxgQ4mqwbg'
            ],
            [
                'id' => 9,
                'name' => 'ななとGames',
                'channel_id' => 'UCXqocGp-RQ_sTw8EpPDg10A'
            ],
            [
                'id' => 10,
                'name' => 'MOJA Ch',
                'channel_id' => 'UCWPfELhSYfNIJcDaHXw4VoA'
            ],
            [
                'id' => 11,
                'name' => '裏切りマンキーコングCh',
                'channel_id' => 'UC_aqpQQpzzTrefOqPK_2Mbw'
            ],
            [
                'id' => 12,
                'name' => 'たいじ/たいちゃんねる',
                'channel_id' => 'UCTrckUWmmrRZcNrfu1mZDOg'
            ],
            [
                'id' => 13,
                'name' => 'つくなみの秘密基地',
                'channel_id' => 'UCrw2aCDbMp_OMYlfY3LDM2w'
            ],
            [
                'id' => 14,
                'name' => '直撃のぱいなぽ〜ちゃんねる',
                'channel_id' => 'UCLZ53BDS7So3PQDfT7SqYPw'
            ],
            [
                'id' => 15,
                'name' => 'ひいらぎ',
                'channel_id' => 'UCrBycAPKO9mJ3f3sDZfXYzQ'
            ],
            [
                'id' => 16,
                'name' => 'くろすっω・）つ',
                'channel_id' => 'UCEnzC7Xf80qpHDFpiXF1V1Q'
            ],
            [
                'id' => 17,
                'name' => 'フグ,',
                'channel_id' => 'UCBkADUDaMoUhDFA9PPwZRgg'
            ],
        ];
        DB::table('channels')->insert($data);
    }
}
