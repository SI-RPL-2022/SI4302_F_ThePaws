<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workings extends Model
{
    use HasFactory;
    protected $table = 'working_hours';
    protected $fillable = [
        'pethouse',
        'day',
        'open',
        'close',
    ];
}
