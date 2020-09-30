<?php

namespace App\Http\Controllers;

use App\Fish;
/*Fishモデルを使用*/
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function fish_name (Request $request)
    {
        $fishes = Fish::all();
        /*$itemsの定義。Fishモデルから全てのデータを拾ってくる*/
        return view ('', ['fish_name' => $fishes]);
        /*ここにfishテーブルを使いたいページを入れる。検索、釣行記録のページ等で使用するため、ページ作ったら具体的に入力する。
        また、ルート設定も後でやっておく。*/
    }
}
