<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umur extends Model
{
    use HasFactory;
    protected $table = 'umur';
    protected $fillable = [
        'umur'
    ];
}
