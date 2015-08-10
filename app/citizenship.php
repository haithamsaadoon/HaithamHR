<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class citizenship extends Model
{
     protected $table = 'citizenship';
     protected $primaryKey='CsCode';
     public $timestamps = false;
}
