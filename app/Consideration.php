<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Consideration extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
    protected $table = 'consideration';
    protected $guarded = array('id');
        public function user()
    {
        return $this -> belongsTo('App\User');
    }
    /**/
}
