<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
        public function index (Request $request)
    {
        $items = User::all();
        /*$itemsの定義。Userから全てのデータを拾ってくる*/
        return view ('fishing_index', ['items' => $items]);
    }
}
