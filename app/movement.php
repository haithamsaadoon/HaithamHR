<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movement extends Model
{
    protected $table = 'movement';
    protected $primaryKey='MoMoveSequ';
    public $timestamps = false;
}
