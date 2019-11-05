<?php

use Illuminate\Database\Seeder;
use App\Town;
use Carbon\Carbon;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MySQLから直接いかのコマンドを実行して、シードデータを挿入してください。
        // マスターを挿入（パス指定の部分は環境によって変化します）
        // 1. LOAD DATA INFILE "/tmp/towns.2.csv"  INTO TABLE towns FIELDS TERMINATED BY ","  ENCLOSED BY ''' LINES TERMINATED BY "\n" (name, pref_city_code, code);
        // タイムスタンプを設定
        // 2. update towns set created_at=NOW()
        // 3. update towns set updated_at=NOW()
    }
}
