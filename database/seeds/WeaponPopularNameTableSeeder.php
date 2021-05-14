<?php

use Illuminate\Database\Seeder;

class WeaponPopularNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('weapon_popular_names')->delete();

        $data = [
            [
                'weapon_id' => 1,
                'name' => 'スプシュ',
            ],
            [
                'weapon_id' => 2,
                'name' => 'スシコラ',
            ],
            [
                'weapon_id' => 2,
                'name' => 'シューコラ',
            ],
            [
                'weapon_id' => 3,
                'name' => 'ヒロシュ',
            ],
            [
                'weapon_id' => 7,
                'name' => 'プラコラ',
            ],
            [
                'weapon_id' => 9,
                'name' => 'シャプマ',
            ],
            [
                'weapon_id' => 11,
                'name' => 'わかば',
            ],
            [
                'weapon_id' => 12,
                'name' => 'もみじ',
            ],
            [
                'weapon_id' => 13,
                'name' => 'おちば',
            ],
            [
                'weapon_id' => 14,
                'name' => '銀モデ',
            ],
            [
                'weapon_id' => 14,
                'name' => '銀モデ',
            ],
            [
                'weapon_id' => 15,
                'name' => '金モデ',
            ],
            [
                'weapon_id' => 17,
                'name' => '黒ZAP',
            ],
            [
                'weapon_id' => 18,
                'name' => '赤ZAP',
            ],
            [
                'weapon_id' => 20,
                'name' => 'ゴツガロン',
            ],
            [
                'weapon_id' => 21,
                'name' => '52デコ',
            ],
            [
                'weapon_id' => 23,
                'name' => 'ジェット',
            ],
            [
                'weapon_id' => 23,
                'name' => 'ジェッスイ',
            ],
            [
                'weapon_id' => 24,
                'name' => 'ジェッカス',
            ],
            [
                'weapon_id' => 25,
                'name' => 'L3',
            ],
            [
                'weapon_id' => 26,
                'name' => 'L3D',
            ],
            [
                'weapon_id' => 27,
                'name' => 'L3ベッチュー',
            ],
            [
                'weapon_id' => 28,
                'name' => '96ガロン',
            ],
            [
                'weapon_id' => 29,
                'name' => '96ガロンデコ',
            ],
            [
                'weapon_id' => 30,
                'name' => 'H3',
            ],
            [
                'weapon_id' => 31,
                'name' => 'H3D',
            ],
            [
                'weapon_id' => 32,
                'name' => 'H3チェリー',
            ],
            [
                'weapon_id' => 33,
                'name' => 'ボールド',
            ],
            [
                'weapon_id' => 34,
                'name' => 'ボールドネオ',
            ],
            [
                'weapon_id' => 35,
                'name' => 'ボールド7',
            ],
            [
                'weapon_id' => 36,
                'name' => 'ボトル',
            ],
            [
                'weapon_id' => 37,
                'name' => 'ボトルフォイル',
            ],
            [
                'weapon_id' => 38,
                'name' => 'ホッブラ',
            ],
            [
                'weapon_id' => 39,
                'name' => 'ホッカス',
            ],
            [
                'weapon_id' => 40,
                'name' => 'ヒロブラ',
            ],
            [
                'weapon_id' => 41,
                'name' => 'ラピブラ',
            ],
            [
                'weapon_id' => 41,
                'name' => 'ラピ',
            ],
            [
                'weapon_id' => 42,
                'name' => 'ラピデコ',
            ],
            [
                'weapon_id' => 43,
                'name' => 'ラピベッ',
            ],
            [
                'weapon_id' => 44,
                'name' => 'ノヴァ',
            ],
            [
                'weapon_id' => 44,
                'name' => 'ノヴァブラ',
            ],
            [
                'weapon_id' => 45,
                'name' => 'ノヴァブラネオ',
            ],
            [
                'weapon_id' => 46,
                'name' => 'ノヴァブラベッチュー',
            ],
            [
                'weapon_id' => 47,
                'name' => 'クラブラ',
            ],
            [
                'weapon_id' => 48,
                'name' => 'クラブラネオ',
            ],
            [
                'weapon_id' => 49,
                'name' => 'ラピエリ',
            ],
            [
                'weapon_id' => 50,
                'name' => 'ラピエリデコ',
            ],
            [
                'weapon_id' => 51,
                'name' => 'ロンブラ',
            ],
            [
                'weapon_id' => 52,
                'name' => 'ロンブラカスタム',
            ],
            [
                'weapon_id' => 53,
                'name' => 'ロンブラネクロ',
            ],
            [
                'weapon_id' => 54,
                'name' => 'ローラー',
            ],
            [
                'weapon_id' => 54,
                'name' => 'スプロラ',
            ],
            [
                'weapon_id' => 55,
                'name' => 'ロラコラ',
            ],
            [
                'weapon_id' => 56,
                'name' => 'ヒロロラ',
            ],
            [
                'weapon_id' => 58,
                'name' => 'ダイナモ',
            ],
            [
                'weapon_id' => 59,
                'name' => 'ダイナモテスラ',
            ],
            [
                'weapon_id' => 60,
                'name' => 'ダイナモベッチュー',
            ],
            [
                'weapon_id' => 61,
                'name' => 'カーボン',
            ],
            [
                'weapon_id' => 62,
                'name' => 'カーボンデコ',
            ],
            [
                'weapon_id' => 63,
                'name' => 'ヴァリロラ',
            ],
            [
                'weapon_id' => 63,
                'name' => 'ヴァリロラ',
            ],
            [
                'weapon_id' => 64,
                'name' => 'ヴァルフォイ',
            ],
            [
                'weapon_id' => 64,
                'name' => 'マルフォイ',
            ],
            [
                'weapon_id' => 65,
                'name' => '筆',
            ],
            [
                'weapon_id' => 66,
                'name' => 'ヒロブラ',
            ],
            [
                'weapon_id' => 67,
                'name' => 'ホヒュー',
            ],
            [
                'weapon_id' => 72,
                'name' => 'スプチャ',
            ],
            [
                'weapon_id' => 73,
                'name' => 'スプスコ',
            ],
            [
                'weapon_id' => 74,
                'name' => 'チャーコラ',
            ],
            [
                'weapon_id' => 75,
                'name' => 'スココラ',
            ],
            [
                'weapon_id' => 75,
                'name' => 'スコラ',
            ],
            [
                'weapon_id' => 76,
                'name' => 'ヒロチャ',
            ],
            [
                'weapon_id' => 79,
                'name' => 'リッター',
            ],
            [
                'weapon_id' => 80,
                'name' => 'リッスコ',
            ],
            [
                'weapon_id' => 80,
                'name' => 'ヨンスコ',
            ],
            [
                'weapon_id' => 81,
                'name' => 'リッカス',
            ],
            [
                'weapon_id' => 83,
                'name' => 'ソイチュ',
            ],
            [
                'weapon_id' => 83,
                'name' => 'ソイチュ',
            ],
            [
                'weapon_id' => 84,
                'name' => 'ソイチュカスタム',
            ],
            [
                'weapon_id' => 85,
                'name' => 'スクイク',
            ],
            [
                'weapon_id' => 88,
                'name' => '竹甲',
            ],
            [
                'weapon_id' => 89,
                'name' => '竹乙',
            ],
            [
                'weapon_id' => 90,
                'name' => '竹丙',
            ],
            [
                'weapon_id' => 91,
                'name' => 'バケツ',
            ],
            [
                'weapon_id' => 91,
                'name' => 'バケスロ',
            ],
            [
                'weapon_id' => 92,
                'name' => 'ヒロスロ',
            ],
            [
                'weapon_id' => 93,
                'name' => 'バケデコ',
            ],
            [
                'weapon_id' => 95,
                'name' => '筆洗',
            ],
            [
                'weapon_id' => 97,
                'name' => 'スクスロ',
            ],
            [
                'weapon_id' => 97,
                'name' => '洗濯機',
            ],
            [
                'weapon_id' => 102,
                'name' => 'オフロ',
            ],
            [
                'weapon_id' => 103,
                'name' => 'オフロデコ',
            ],
            [
                'weapon_id' => 104,
                'name' => 'バレル',
            ],
            [
                'weapon_id' => 104,
                'name' => 'バレスピ',
            ],
            [
                'weapon_id' => 105,
                'name' => 'ヒロスピ',
            ],
            [
                'weapon_id' => 106,
                'name' => 'バレデコ',
            ],
            [
                'weapon_id' => 107,
                'name' => 'バレリミ',
            ],
            [
                'weapon_id' => 108,
                'name' => 'スプスピ',
            ],
            [
                'weapon_id' => 111,
                'name' => 'ハイドラ',
            ],
            [
                'weapon_id' => 112,
                'name' => 'ハイドラカスタム',
            ],
            [
                'weapon_id' => 117,
                'name' => 'スプマニュ',
            ],
            [
                'weapon_id' => 117,
                'name' => 'マニュ',
            ],
            [
                'weapon_id' => 118,
                'name' => 'マニュコラ',
            ],
            [
                'weapon_id' => 119,
                'name' => 'ヒロマニュ',
            ],
            [
                'weapon_id' => 124,
                'name' => 'デュアル',
            ],
            [
                'weapon_id' => 125,
                'name' => 'デュアカス',
            ],
            [
                'weapon_id' => 126,
                'name' => 'ケルビン',
            ],
            [
                'weapon_id' => 127,
                'name' => 'ケルビンデコ',
            ],
            [
                'weapon_id' => 128,
                'name' => 'ケルビンベッチュー',
            ],
            [
                'weapon_id' => 131,
                'name' => 'パラシェ',
            ],
            [
                'weapon_id' => 131,
                'name' => '傘',
            ],
            [
                'weapon_id' => 132,
                'name' => 'ヒロシェ',
            ],
            [
                'weapon_id' => 134,
                'name' => 'キャンシェル',
            ],
            [
                'weapon_id' => 134,
                'name' => 'テント',
            ],
            [
                'weapon_id' => 137,
                'name' => 'スパガ',
            ],
        ];

        \DB::table('weapon_popular_names')->insert($data);
    }
}
