<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blood extends Model
{
    protected $table = 'blood';
    protected $primaryKey='BlCode';
    public $timestamps = false;
}
