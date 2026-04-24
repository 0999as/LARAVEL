<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User10 extends Model
{
  protected $table = 'users10';
  public function profiles() {
    return $this->hasOne(Profiles::class, 'user_id', 'id');
  }
}