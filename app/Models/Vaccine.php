<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;
    protected $table = 'carecommend_vaccine';
    protected $fillable = [
        'nama',
        'umur',
        'berat_badan',
        'deskripsi',
    ];
}
