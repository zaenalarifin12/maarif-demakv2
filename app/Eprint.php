<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eprint extends Model
{
    protected $guarded = [];

    // public function mata_pelajaran(){}
    public function category_eprints()
    {
        return $this->belongsToMany(CategoryEprint::class, 
            "category_eprint_eprint", "eprint_id", "categoryeprint_id");
    }
}
