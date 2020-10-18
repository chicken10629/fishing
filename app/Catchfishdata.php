<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Catchfishdata extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $table = 'catch_fish_data';
    public static $rules = array(
        'place_id' => 'required',
        'fish_id' => 'required',
        'mappoint_id' => 'required',
        'map_id' => 'required',
        );
    /**/
        public function user()
    {
        return $this -> belongsTo('App\User');
    }
}