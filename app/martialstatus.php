<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class martialstatus extends Model
{
    protected $table = 'martialstatus';
    protected $primaryKey='MsCode';
    public $timestamps = false;
}
