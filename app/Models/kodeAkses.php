<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KodeAkses extends Model
{
    use HasFactory;

    protected $table = 'kode_akses';
    protected $fillable = ['kode', 'pemilih_id', 'sudah_digunakan'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($kodeAkses) {
            $kodeAkses->kode = strtoupper(Str::random(8)); // Buat kode unik otomatis
        });
    }

    public function pemilih()
    {
        return $this->belongsTo(PemilihModel::class, 'pemilih_id');
    }
}