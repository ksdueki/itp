<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class DoctorGenresController extends Controller
{
    public function root()
    {
        return response()->view('doctor.catalog')->header('Content-Type', 'text/xml');
    }

    //
    public function index()
    {
        $param_ids = [3, 9585, 9586, 7];
        $collection = Genre::whereIn('param', $param_ids)->get();

        $items = $collection->map(function ($item, $key) {
            return [
                'title' => $item->title,
                'category' => $item->title,
                'param' => $item->param,
            ];
        });


        $link = "https://itp.ne.jp/";
        $linkBase = 'https://aok-net.jp/itownpage/itp/public/';

        return response()->view('doctor.genre', compact('link', 'linkBase', 'items'))->header('Content-Type', 'text/xml');
    }
}
