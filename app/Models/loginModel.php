<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class loginModel extends Authenticatable
{
    use Notifiable;

    // Jika Anda menggunakan tabel yang berbeda, Anda bisa mendefinisikannya di sini
    protected $table = 'users'; // Nama tabel di database

    // Definisikan atribut yang dapat diisi
    protected $fillable = [
        'name',
        'username',
        'password',
        // Tambahkan atribut lain sesuai kebutuhan
    ];

    // Definisikan atribut yang harus disembunyikan untuk array
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Jika Anda menggunakan hashing untuk password, Anda bisa menambahkan mutator
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
}