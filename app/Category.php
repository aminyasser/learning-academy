<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    
    public function courses() {
    
          return $this->hasMany('App\Course');
    }
}

