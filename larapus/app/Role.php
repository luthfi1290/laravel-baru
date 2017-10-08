<?php

namespace App;

use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    public function user(){
      return $this->belongsTo('App\user','role_id');
    }
}
