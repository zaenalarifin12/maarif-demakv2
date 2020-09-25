<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
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
        return $this->belongsToMany(User::class, "enroll" ,"user_id", "mata_pelajaran_id");
    }
}
