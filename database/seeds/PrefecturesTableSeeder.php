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
            ['code' => "01", 'name' => '北海道','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "02", 'name' => '青森県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "03", 'name' => '岩手県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "04", 'name' => '宮城県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "05", 'name' => '秋田県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "06", 'name' => '山形県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "07", 'name' => '福島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "13", 'name' => '東京都','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "14", 'name' => '神奈川県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "11", 'name' => '埼玉県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "12", 'name' => '千葉県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "08", 'name' => '茨城県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "09", 'name' => '栃木県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "10", 'name' => '群馬県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "15", 'name' => '新潟県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "19", 'name' => '山梨県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "20", 'name' => '長野県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "16", 'name' => '富山県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "17", 'name' => '石川県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "18", 'name' => '福井県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "23", 'name' => '愛知県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "21", 'name' => '岐阜県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "22", 'name' => '静岡県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "24", 'name' => '三重県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "27", 'name' => '大阪府','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "26", 'name' => '京都府','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "28", 'name' => '兵庫県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "25", 'name' => '滋賀県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "29", 'name' => '奈良県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "30", 'name' => '和歌山県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "31", 'name' => '鳥取県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "32", 'name' => '島根県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "33", 'name' => '岡山県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "34", 'name' => '広島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "35", 'name' => '山口県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "36", 'name' => '徳島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "37", 'name' => '香川県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "38", 'name' => '愛媛県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "39", 'name' => '高知県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "40", 'name' => '福岡県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "41", 'name' => '佐賀県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "42", 'name' => '長崎県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "43", 'name' => '熊本県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "44", 'name' => '大分県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "45", 'name' => '宮崎県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "46", 'name' => '鹿児島県','created_at' => $dt,  'updated_at' => $dt],
            ['code' => "47", 'name' => '沖縄県','created_at' => $dt,  'updated_at' => $dt],
        ]);
    }
}
