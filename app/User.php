<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Traits\Uuid;

class User extends Authenticatable
{
    use Notifiable;
    use Uuid;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'role', "status"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //// level user
    /**
    * 1 => siswa
    * 2 => anggota mgmp
    * 3 => admin mgmp
    * 4 => admin
    */
    public function scopeisSiswa($q)
    {
        return $q->where("role", "=", 1);
    }

    public function scopeisAnggota($q)
    {
        return $q->where("role", "=", 2);
    }

    public function scopeisAdminMgmp($q)
    {
        return $q->where("role", "=", 3);
    }

    public function scopeisAdmin($q)
    {
        return $q->where("role", "=", 4);
    }

    public function scopeisNotAdmin($q)
    {
        return $q->where("role", "!=", 4);
    }


    // ============ relasi
    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
