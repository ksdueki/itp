<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Genre;
use App\SubGenre;

class SubGenresController extends Controller
{
    //
    public function index($genre_id)
    {
        $genre = Genre::where('param', $genre_id)->first();

        $collection = SubGenre::where('genre_id', $genre_id)->get();

    //     <title>ひきや（曳家）工事</title>
    //   <category>住まい/リフォーム/ひきや（曳家）工事</category>
    //   <param>9509</param>
        // return response()->xml($collection);

        $items = $collection->map(function ($item, $key) use ($genre) {
            return [
                'title' => $item->title,
                'category' => $genre->title."/".$item->title,
                'param' => $item->param,
            ];
        });

        $title = 'iタウンページ タウンページ 中ジャンル';
        $link = "https://aok-net.jp/itownpage/itp/public/genres/";
        $linkBase = 'https://aok-net.jp/itownpage/itp/public/';

        return response()->view('xmls.genre', compact('title', 'link', 'linkBase', 'items'))->header('Content-Type', 'text/xml');
    }

}
