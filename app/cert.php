<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cert extends Model
{
     protected $table = 'cert';
     protected $primaryKey='CeCertSequ';
     public $timestamps = false;
}
