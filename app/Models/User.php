<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'no_hp',
        'alamat',
        'role',

    ];

    // relasi ke periksa sebagai pasien
    public function pasien(): HasMany
    {
        return $this->hasMany(Periksa::class,'id_pasien');
    }

    // relasi ke periksa sebagai dokter
    public function dokter(): HasMany
    {
        return $this->hasMany(Periksa::class,'id_dokter');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // protected static function booted()
    // {
    //     static::creating(function ($user) {
    //         if (!$user->role) {
    //             $user->role = 'pasien'; // Default role untuk pasien
    //         }
    //     });
    // }

}
