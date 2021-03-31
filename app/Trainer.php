<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $guarded = ['id']; 
    
    public function courses() {
    
        return $this->hasMany('App\Course');
  }
}
