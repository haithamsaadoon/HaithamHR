<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emplostatus extends Model
{
   protected $table = 'emplostatus';
    protected $primaryKey='EsCode';
    public $timestamps = false;
}
