<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $guarded = [];

    public function mata_pelajarans()
    {
        return $this->hasMany(MataPelajaran::class);
    }
}
