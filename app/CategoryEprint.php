<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryEprint extends Model
{
    protected $guarded = [];

    public function eprints()
    {
        return $this->hasMany(Eprint::class);
    }
}
