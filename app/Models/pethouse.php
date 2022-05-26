<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pethouse extends Model
{
    use HasFactory;
    protected $table = 'pethouses';
    protected $fillable = [
        'nama',
        'alamat',
        'no_telepon',
        'website',
        'maps',
        'rating',
        'foto',
        'deskripsi',
    ];
}
