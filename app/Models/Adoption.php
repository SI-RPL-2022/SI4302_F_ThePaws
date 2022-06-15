<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;
    protected $table = 'adoptions';
    protected $fillable = [
        'nama_peliharaan',
        'kategori',
        'jenis_kelamin',
        'ras',
        'umur',
        'berat',
        'alamat',
        'foto',
        'deskripsi'
    ];
}
