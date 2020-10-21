<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $table = 'prefecture';
      public function regions()
    {
        return $this -> belongsTo('App\Regions');
    }
      public function place()
    {
      return $this->hasmany('App\Place');
    }
}
