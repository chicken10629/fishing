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
     
    protected $table = 'map';
    
    public function user()
    {
        return $this -> belongsTo('App\User');
    }
    
    public function place()
    {
        return $this -> belongsTo('App\Place');
    }


}
