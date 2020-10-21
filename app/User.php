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
    public function scopeIsSiswa($q)
    {
        return $q->where("role", "=", 1);
    }

    public function scopeIsAnggota($q)
    {
        return $q->where("role", "=", 2);
    }

    public function scopeIsAdminMgmp($q)
    {
        return $q->where("role", "=", 3);
    }

    public function scopeIsAdminKkm($q)
    {
        return $q->where("role", "=", 4);
    }

    public function scopeIsAdmin($q)
    {
        return $q->where("role", "=", 5);
    }

    public function scopeIsNotAdmin($q)
    {
        return $q->where("role", "!=", 5);
    }


    // ============ relasi
    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class);
    }
}
