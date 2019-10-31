<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Carbon\Carbon;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UTC時間
        $dt = Carbon::now()->format('Y-m-d H:i:s');
        Genre::insert([
    		['param' => 3, 'title' => '病院・医院',         'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 9585, 'title' => '歯科',           'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 5, 'title' => '暮らし',            'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 1, 'title' => 'グルメ・飲食',       'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 2, 'title' => '住まい',            'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 9586, 'title' => '健康・介護',      'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 6, 'title' => 'ショッピング',      'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 4, 'title' => '美容・ファッション','created_at' => $dt,  'updated_at' => $dt],
            ['param' => 9, 'title' => 'ビジネス',          'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 7, 'title' => 'ペット',             'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 8, 'title' => '旅行・宿泊',             'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 13, 'title' => 'レジャー・スポーツ',                'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 15, 'title' => '自動車・バイク',                'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 11, 'title' => '趣味',              'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 14, 'title' => '冠婚葬祭・イベント',                'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 10, 'title' => '教育・習い事',              'created_at' => $dt,  'updated_at' => $dt],
            ['param' => 12, 'title' => '公共機関・団体',                'created_at' => $dt,  'updated_at' => $dt],
        ]);
    }
}