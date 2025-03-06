<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PemilihModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'pemilih';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_pemilih', 'status', 'nis', 'email', 'password'];
    public function suara()
    {
        return $this->hasOne(SuaraModel::class, 'id');
    }
}