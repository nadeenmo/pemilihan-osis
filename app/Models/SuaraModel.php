<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuaraModel extends Model
{
    use HasFactory;
    
    public $timestamps = false; 
    protected $table = 'suara';
    protected $primaryKey = 'id';
    protected $fillable = ['pemilih_id', 'kandidat_id', 'waktu_voting'];
    public function pemilih()
    {
        return $this->belongsTo(PemilihModel::class, 'pemilih_id');
    }

    public function kandidat()
    {
        return $this->belongsTo(KandidatModel::class, 'kandidat_id');
    }
}