<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Town;

class TownsController extends Controller
{
    public function index($pref_code, $city_code)
    {
        $collection = Town::where('pref_city_code', $pref_code.$city_code)->get();

        $items = $collection->map(function ($item, $key) {
            return [
                'title' => $item->name,
                'category' => $item->name,
                'param' => $item->code,
            ];
        });

        return response()->xml(
            [
                'channel' => [
                    'title' => 'iタウンページ 地域の絞り込み Level3 町域名',
                    'linkBase' => 'http://www.aok-net.jp/',
                    'items' => $items->all()
                ],
                'pref_city_code' => $pref_code.$city_code
            ]);
    }
}