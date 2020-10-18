<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Place;

class PlaceController extends Controller
{
    
    public function register(Request $request)
    {

      $this->validate($request, Place::$rules);
      $place = new Place;
      $form = $request->all();
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // データベースに保存する
      $place->fill($form);
      $place->save();
      
      return redirect('place_register_complited');
    }
    
    public function complited()
    {
    return view('place_register_complited');
    }
    
    public function index()
    {
    return view('place_register');
    }
}
