<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gender extends Model
{
    protected $table = 'gender';
    protected $primaryKey='GnCode';
    public $timestamps = false;
}
