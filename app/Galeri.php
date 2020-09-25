<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $guarded = [];

    public function MataPelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
