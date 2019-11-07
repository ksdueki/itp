<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{
    public function index($pref_code)
    {
        $collection = City::where('pref_code', $pref_code)->get();

        $items = $collection->map(function ($item, $key) use($pref_code) {
            return [
                'title' => $item->name,
                'category' => $item->name,
                'param' => $pref_code.$item->code,
            ];
        });

        $title = 'iタウンページ 地域の絞り込み Level2 市町村';
        $linkBase = 'http://www.aok-net.jp/';

        return response()->view('xmls.city', compact('title', 'linkBase', 'items'))->header('Content-Type', 'text/xml');
    }
}
