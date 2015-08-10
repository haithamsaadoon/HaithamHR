<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class universities extends Model
{
    protected $table = 'universities';
    protected $primaryKey='UnCode';
    public $timestamps = false;
}
