<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
  	protected $primaryKey = 'orderCode';
  	public $timestamps = true;
}
