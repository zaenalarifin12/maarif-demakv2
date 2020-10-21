<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataPelajaran extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function scopeIsMgmp($q)
    {
        return $q->where("category_forum", 1);
    }

    public function scopeIsKkm($q)
    {
        return $q->where("category_forum", 2);
    }

    // ================    RELASI   =================


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

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
