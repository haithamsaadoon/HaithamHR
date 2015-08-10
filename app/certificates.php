<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificates extends Model
{
     protected $table = 'certificates';
     protected $primaryKey='CrCode';
     public $timestamps = false;
}
