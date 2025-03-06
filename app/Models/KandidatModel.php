<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KandidatModel extends Model
{
    //
    use HasFactory;

    public $timestamps = false;
    protected $table = 'kandidat';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kandidat',
        'kelas',
        'visi',
        'misi',
        'foto'
    ];
}