<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Place extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $table = 'place';
    protected $fillable = ['prefecture_id' , 'place_name'];
    /*指定したカラムのみを拾う。*/

    public static $rules = array(
        'prefecture_id' => 'required',
        'place_name' => 'required',
);
      public function prefecture()
    {
        return $this -> belongsTo('App\Prefecture');
    }

}
