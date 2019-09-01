<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  //Debo aclarar 4 atributos para que se relacione con la DB
  public $table = "products";
  //public $primaryKey = "id";
  //public $timestamps = false;
  public $guarded = [];

  protected $fillable = [
      'name', 'image', 'price', 'category_id'
  ];

  public function category()
  {
    return $this->belongsTo('App\Category', 'category_id');
  }

  public function carts(){
    return $this->belongsToMany('App\Cart', 'cart_product', 'product_id', 'cart_id');
  }
}
