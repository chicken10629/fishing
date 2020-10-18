<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Dayfishing extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $table = 'fishing';


    public static $rules = array(
        'date_id' => 'required',
        'place_id' => 'required',
        'fish_id' => 'required',
        'map_id' => 'required',
);
/*バリデーションかけるために、$rulesを定義。コントローラー側で使用*/
    public function user()
    {
        return $this -> belongsTo('App\User');
    }
    public function fish()
    {
        return $this -> belongsTo('App\Fish');
    }

}
