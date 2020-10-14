<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class JajaranPengurusOrang extends Model
{
    use Uuid;

    protected $guarded = [];

    public function jajaranPengurus()
    {
        return $this->belongsTo(JajaranPengurus::class);
    }
}
