<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prefecture;

class PrefecturesController extends Controller
{
    public function index()
    {
        $collection = Prefecture::all();
        $items = $collection->map(function ($item, $key) {
            return [
                'category' => $item->name,
                'param' => $item->code,
                'description' => "prefname=".$item->name,
            ];
        });

        return response()->xml(
            [
                'channel' => [
                    'title' => 'iタウンページ 地域の絞り込み Level1 都道府県',
                    'linkBase' => 'http://www.aok-net.jp/',
                    'items' => $items->all()
                ]
            ]);
    }

}
