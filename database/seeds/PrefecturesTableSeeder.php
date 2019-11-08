<?php

use Illuminate\Database\Seeder;

use App\Prefecture;
use Carbon\Carbon;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now()->format('Y-m-d H:i:s');
        Prefecture::insert([
            ['code' => "01", 'region' => '北海道・東北', 'name' => '北海道','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "02", 'region' => '北海道・東北', 'name' => '青森県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "03", 'region' => '北海道・東北', 'name' => '岩手県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "04", 'region' => '北海道・東北', 'name' => '宮城県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "05", 'region' => '北海道・東北', 'name' => '秋田県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "06", 'region' => '北海道・東北', 'name' => '山形県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "07", 'region' => '北海道・東北', 'name' => '福島県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "13", 'region' => '関東', 'name' => '東京都','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "14", 'region' => '関東', 'name' => '神奈川県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "11", 'region' => '関東', 'name' => '埼玉県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "12", 'region' => '関東', 'name' => '千葉県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "08", 'region' => '関東', 'name' => '茨城県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "09", 'region' => '関東', 'name' => '栃木県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "10", 'region' => '関東', 'name' => '群馬県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "15", 'region' => '甲信越・北陸', 'name' => '新潟県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "19", 'region' => '甲信越・北陸', 'name' => '山梨県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "20", 'region' => '甲信越・北陸', 'name' => '長野県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "16", 'region' => '甲信越・北陸', 'name' => '富山県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "17", 'region' => '甲信越・北陸', 'name' => '石川県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "18", 'region' => '甲信越・北陸', 'name' => '福井県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "23", 'region' => '東海', 'name' => '愛知県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "21", 'region' => '東海', 'name' => '岐阜県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "22", 'region' => '東海', 'name' => '静岡県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "24", 'region' => '東海', 'name' => '三重県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "27", 'region' => '関西', 'name' => '大阪府','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "26", 'region' => '関西', 'name' => '京都府','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "28", 'region' => '関西', 'name' => '兵庫県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "25", 'region' => '関西', 'name' => '滋賀県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "29", 'region' => '関西', 'name' => '奈良県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "30", 'region' => '関西', 'name' => '和歌山県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "31", 'region' => '中国', 'name' => '鳥取県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "32", 'region' => '中国', 'name' => '島根県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "33", 'region' => '中国', 'name' => '岡山県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "34", 'region' => '中国', 'name' => '広島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "35", 'region' => '中国', 'name' => '山口県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "36", 'region' => '四国', 'name' => '徳島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "37", 'region' => '四国', 'name' => '香川県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "38", 'region' => '四国', 'name' => '愛媛県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "39", 'region' => '四国', 'name' => '高知県','created_at' => $dt,  'updated_at' => $dt],

            ['code' => "40", 'region' => '九州・沖縄', 'name' => '福岡県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "41", 'region' => '九州・沖縄', 'name' => '佐賀県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "42", 'region' => '九州・沖縄', 'name' => '長崎県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "43", 'region' => '九州・沖縄', 'name' => '熊本県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "44", 'region' => '九州・沖縄', 'name' => '大分県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "45", 'region' => '九州・沖縄', 'name' => '宮崎県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "46", 'region' => '九州・沖縄', 'name' => '鹿児島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "47", 'region' => '九州・沖縄', 'name' => '沖縄県','created_at' => $dt,  'updated_at' => $dt],
        ]);
    }
}
