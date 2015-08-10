<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobtitle extends Model
{
    protected $table = 'jobtitle';
    protected $primaryKey='JtCode';
    public $timestamps = false;
}
