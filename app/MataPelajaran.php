<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataPelajaran extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function galeries()
    {
        return $this->hasMany(Galeri::class);
    }

    public function lembaga()
    {
        return $this->belongsTo(Lembaga::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
