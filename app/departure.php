<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departure extends Model
{
    protected $table = 'departure';
    protected $primaryKey='MoMoveSequ';
    public $timestamps = false;
}
