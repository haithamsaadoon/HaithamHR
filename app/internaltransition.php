<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internaltransition extends Model
{
    protected $table = 'internaltransition';
    protected $primaryKey='InTransSequ';
    public $timestamps = false;
}
