<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
    		['param' => 3, 'title' => '病院・医院'],
            ['param' => 9585, 'title' => '歯科'],
            ['param' => 5, 'title' => '暮らし'],
            ['param' => 1, 'title' => 'グルメ・飲食'],
            ['param' => 2, 'title' => '住まい'],
            ['param' => 9586, 'title' => '健康・介護'],
            ['param' => 6, 'title' => 'ショッピング'],
            ['param' => 4, 'title' => '美容・ファッション'],
            ['param' => 9, 'title' => 'ビジネス'],
            ['param' => 7, 'title' => 'ペット'],
            ['param' => 8, 'title' => '旅行・宿泊'],
            ['param' => 13, 'title' => 'レジャー・スポーツ'],
            ['param' => 15, 'title' => '自動車・バイク'],
            ['param' => 11, 'title' => '趣味'],
            ['param' => 14, 'title' => '冠婚葬祭・イベント'],
            ['param' => 10, 'title' => '教育・習い事'],
            ['param' => 12, 'title' => '公共機関・団体'],
        ]);
    }
}