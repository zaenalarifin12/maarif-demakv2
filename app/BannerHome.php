<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerHome extends Model
{
    protected $guarded = [];
    use SoftDeletes;
}
