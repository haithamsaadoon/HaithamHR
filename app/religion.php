<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class religion extends Model
{
    protected $table = 'religion';
    protected $primaryKey='RlCode';
    public $timestamps = false;
}
