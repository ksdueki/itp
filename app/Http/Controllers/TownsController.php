<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Town;

class TownsController extends Controller
{
    public function index($pref_code, $city_code)
    {
        $pref_city_code = $pref_code.$city_code;
        $collection = Town::where('pref_city_code', $pref_city_code)->get();

        $items = $collection->map(function ($item, $key) use($pref_city_code){
            return [
                'title' => $item->name,
                'category' => $item->name,
                'param' => $pref_city_code.$item->code,
            ];
        });

        $title = 'iタウンページ 地域の絞り込み Level3 町域名';
        $linkBase = 'http://www.aok-net.jp/';

        return response()->view('xmls.town', compact('title', 'linkBase', 'items'))->header('Content-Type', 'text/xml');
    }
}