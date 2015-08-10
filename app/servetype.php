<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servetype extends Model
{
    protected $table = 'servetype';
    protected $primaryKey='StCode';
    public $timestamps = false;
}
