<?php

namespace App\Http\Controllers;

use App\User;
use App\Prefecture;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SelectplaceController extends Controller
{
        public function index (Request $request)
    {   
        $prefecture = Prefecture::orderBy('code','asc')->pluck('name', 'code');
        /*ascは小さい順、pluckは指定のデータだけ配列でもってくる。
        ここではPrefectureから「nameとcode」を配列で拾って昇順にし、$prefectureへ代入*/
        $prefecture = $prefecture -> prepend('都道府県', '');
        /*prependは最初に値を追加するもの。都道府県とnullではない空の値を入れている。*/
        $place = Place::all();
        return view ('select_place', ['place' => $place , 'prefecture' => $prefecture]);
    }
}
