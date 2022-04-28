<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pethouse extends Model
{
    use HasFactory;
    protected $table = 'Pethouse';
    protected $fillable = [
        "nama", "kategori", "alamat", "no_telp", "website", "jam_operasional", "cover", "deskripsi"
    ];
}
