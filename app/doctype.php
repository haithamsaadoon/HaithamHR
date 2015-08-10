<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctype extends Model
{
    protected $table = 'doctype';
    protected $primaryKey='dtCode';
    public $timestamps = false;
}
