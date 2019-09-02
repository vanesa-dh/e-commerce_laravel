<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  protected $fillable = [
      'user_id'
  ];

  public function users()
  {
    return $this->belongsTo('App\User', 'user_id');
  }

  public function products(){
    return $this->belongsToMany('App\Product', 'cart_product', 'cart_id', 'product_id');
  }
}
