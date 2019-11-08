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
                'category' => $item->region . "/" . $item->name,
                'param' => $item->code,
                'description' => "prefname=".$item->name,
            ];
        });
        return response()->view('xmls.prefecture',compact('items'))->header('Content-Type', 'text/xml');
    }
}
