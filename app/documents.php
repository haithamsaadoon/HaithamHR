<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    protected $table = 'documents';
    protected $primaryKey='DoDocumentSeq';
    public $timestamps = false;
}