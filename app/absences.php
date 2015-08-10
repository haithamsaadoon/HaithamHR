<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absences extends Model
{
    protected $table = 'absences';
    protected $primaryKey='MoMoveSequ';
    public $timestamps = false;
}
