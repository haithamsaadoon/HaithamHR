<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $table = 'employee';
     protected $primaryKey='EmSequ';
     public $timestamps = false;
}
