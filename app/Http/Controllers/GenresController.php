<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenresController extends Controller
{
    //
    public function index()
    {
        $collection = Genre::all();
        $items = $collection->map(function ($item, $key) {
            return [
                'title' => $item->title,
                'category' => $item->title,
                'param' => $item->param,
            ];
        });


        $title = 'iタウンページ タウンページ 大ジャンル';
        $link = "https://aok-net.jp/itownpage/itp/public/genres/";
        $linkBase = 'https://aok-net.jp/itownpage/itp/public/';

        return response()->view('xmls.genre', compact('title', 'link', 'linkBase', 'items'))->header('Content-Type', 'text/xml');
    }
}
