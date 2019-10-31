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

        return response()->xml(
            [
                'channel' => [
                    'channelId' => 'tpage',
                    'title' => 'タウンページ 中ジャンル',
                    'link' => 'https://itp.ne.jp',
                    'linkBase' => 'http://www.aok-net.com/gootownpage/1.00/',
                    'items' => $items->all()
                ],
                'layout' => [
                    'item' => [
                        'RegText' => [ 'scope' => 'http://www.aok-net.com/gootownpage/1.00/']
                    ],
                    'item' => [
                        'RegText' => [ 'scope' => 'http://www.aok-net.com/gootownpage/1.00/']
                    ]
                ],
                'find' => [
                    'item' => [
                        'xLink' => 'http://itprss/?',
                        'link' => 'https://itp.ne.jp/dir_result/?',
                    ],
                    'item' => [
                        'xLink' => 'http://itprss/?',
                        'link' => 'https://itp.ne.jp/dir_result/?',
                    ]
                ],
                'keyword' => [
                    'item' => [
                        'input' => 'kw=',
                    ]
                ]
            ]
        );
    }

}
