<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
    */
<<<<<<< HEAD
    protected $guarded = ['id'];
    protected $table = ['users'];
=======
    protected $guarded = ['id']; 
>>>>>>> 3405c9a9c7190a86123f837a3dab2e28c4d6806f

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // public function mahasiswa()
    // {
    //     return $this->hasMany(mahasiswa::class);
    // }

    // public function dosenwali(){
    //     return $this->hasMany(dosenwali::class);
    // }

    // public function operator(){
    //     return $this->hasMany(operator::class);
    // }

    // public function departemen(){
    //     return $this->hasMany(departemen::class);
    // }
}
