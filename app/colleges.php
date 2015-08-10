<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class colleges extends Model
{
    protected $table = 'colleges';
    protected $primaryKey='ClCode';
    public $timestamps = false;
}
