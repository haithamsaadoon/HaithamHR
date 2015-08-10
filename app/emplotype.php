<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emplotype extends Model
{
    protected $table = 'emplotype';
     protected $primaryKey='EtCode';
     public $timestamps = false;
}
