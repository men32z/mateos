<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['description', 'name'];
    public function images(){
      return $this->hasMany('App\Image');
    }
}
