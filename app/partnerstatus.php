<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class partnerstatus extends Model
{
    protected $table = 'partnerstatus';
    protected $primaryKey='PsCode';
    public $timestamps = false;
}
