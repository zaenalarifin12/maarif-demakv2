<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //
    public function scopeIsBerita($q)
    {
        return $q->where("category_id", 1)->latest();
    }

    public function scopeIsPengumuman($q)
    {
        return $q->where("category_id", 2)->latest();
    }

    public function scopeIsAgenda($q)
    {
        return $q->where("category_id", 3)->latest();
    }

    public function scopeIsBlk($q)
    {
        return $q->where("category_id", 4)->latest();
    }

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
        ->format('D,d M Y');
    }
}
