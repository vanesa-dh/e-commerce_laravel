<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  //Debo aclarar 4 atributos para que se relacione con la DB
  public $table = "categories";
  //public $primaryKey = "id";
  //public $timestamps = false;
  public $guarded = [];

  protected $fillable = [
      'category'
  ];

  public function products()
  {
    return $this->hasMany('App\Product', 'category_id');
  }
}
