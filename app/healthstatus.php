<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class healthstatus extends Model
{
    protected $table = 'healthstatus';
    protected $primaryKey='HsCode';
    public $timestamps = false;
}
