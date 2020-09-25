<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryEprint extends Model
{
    protected $guarded = [];

    public function eprints()
    {
        return $this->belongsToMany(Eprint::class, 
        "category_eprint_eprint", "categoryeprint_id", "eprint_id");

    }
}
