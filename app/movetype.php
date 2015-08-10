<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movetype extends Model
{
   protected $table = 'movetype';
    protected $primaryKey='MtCode';
    public $timestamps = false;
}
