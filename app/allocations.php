<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allocations extends Model
{
    protected $table = 'allocations';
    protected $primaryKey='AlAllocateSequ';
    public $timestamps = false;
}
