<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;

class JajaranPengurus extends Model
{
    
    use Uuid;

    public function jajaranPengurusOrang()
    {
        return $this->hasMany(JajaranPengurusOrang::class);
    }
}
