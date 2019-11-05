<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    public function index($pref_code)
    {
        $collection = City::where('pref_code', $pref_code)->get();

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
                    'title' => 'iタウンページ 地域の絞り込み Level2 市町村',
                    'linkBase' => 'http://www.aok-net.jp/',
                    'items' => $items->all()
                ]
            ]);
    }
}
