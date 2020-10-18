<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Dayfishing;
use App\Catchfishdata;
use App\Fish;
use App\User;

class DayfishingController extends Controller
{
    
    public function register(Request $request)
    {

      $this->validate($request, Dayfishing::$rules);
      /*複数モデルがあっても、validateは1行だけでOK*/
      $dayfishing = new Dayfishing;
      $form = $request->all();
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $dayfishing->fill($form);
      $dayfishing->save();
      
      $fish = Fish::all();
      $form = $request->all();
      
      return redirect('day_fishing_confirmation');
    }
    
    public function complited()
    {
    return view('day_fishing_complited');
    }
    
    public function index()
    {
      $items = User::all();
      $fish = Fish::all();
      
      /*ビューに渡すデータを全て入れる*/
    return view('day_fishing_edit' , ['fish_name' => $fish , 'items' => $items ]);
    }
}