<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nationality extends Model
{
    protected $table = 'nationality';
    protected $primaryKey='NaCode';
    public $timestamps = false;
}
