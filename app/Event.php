<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
