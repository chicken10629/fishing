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
        $prefecture = Prefecture::orderBy('code','asc');
        /*ascは小さい順、pluckは指定のデータだけ配列でもってくる。
        ここではPrefectureから「nameとcode」を配列で拾って昇順にし、$prefectureへ代入*/
        $place = Place::orderBy('id','desc');
        return view ('select_place', ['place' => $place , 'prefecture' => $prefecture]);
    }
}
