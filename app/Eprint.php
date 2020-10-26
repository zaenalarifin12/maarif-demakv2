<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eprint extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];

    // public function mata_pelajaran(){}
    public function category_eprint()
    {
        return $this->belongsTo(CategoryEprint::class);
    }

    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
