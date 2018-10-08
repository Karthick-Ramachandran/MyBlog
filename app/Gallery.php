<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  protected  $fillable = ['images'];

public function ImagesAttribute($images){

  return asset($images);


}

}
