<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class regions extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
      Public function prefecture()
      {
          return $this->hasmany('App\Prefecture');
      }
}
