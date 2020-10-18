<?php

namespace App\Http\Controllers;

use App\User;
use App\Dayfishing;
use App\Place;
use App\Fish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FishingindexController extends Controller
{
        public function index ($id)
    {   
        /*ユーザーページを表示。最近の釣果も表示したいので、モデルDayfishing、Place、Fishからもデータ抽出
        値を代入してviewへ送る*/
        $user = User::find($id);
        $dayfishing = Dayfishing::all()->take(3)->sortByDesc('updated_at');
        $place = Place::all();
        $fish = Fish::all();
        return view ('fishing_index', ['user_id' => $user , 'fishing' => $dayfishing, 'place' => $place , 'fish' => $fish]);
    }
}
