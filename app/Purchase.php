<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
  protected $fillable = [
      'user_id', 'cart_id', 'date', 'total'
  ];
}
