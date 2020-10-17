<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramKegiatan extends Model
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $guarded = [];
}
