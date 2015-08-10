<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class promotiontype extends Model
{
    protected $table = 'promotiontype';
    protected $primaryKey='PtCode';
    public $timestamps = false;
}
