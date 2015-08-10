<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class placementtype extends Model
{
    protected $table = 'Placementtype';
    protected $primaryKey='PtCode';
    public $timestamps = false;
}
