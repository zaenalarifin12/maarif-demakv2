<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProgramKegiatan extends Model
{
    protected $guarded = [];

    public function galeries()
    {
        return $this->hasMany(Galeri::class);
    }

    public function products()
    {
        return $this->hasMany(Products::class);
    }


    // public function jajaran
}
