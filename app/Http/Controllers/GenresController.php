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

        return response()->xml(
            [
                'channel' => [
                    'channelId' => 'tpage',
                    'title' => 'タウンページ 大ジャンル',
                    'link' => 'https://itp.ne.jp/genre_dir/',
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
