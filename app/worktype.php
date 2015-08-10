<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class worktype extends Model
{
    protected $table = 'worktype';
    protected $primaryKey='WtCode';
    public $timestamps = false;
}
