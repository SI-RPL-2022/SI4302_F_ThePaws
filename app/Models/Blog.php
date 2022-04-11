<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
<<<<<<< HEAD:app/Models/Blog.php
    protected $table = 'blogs';
    protected $guarded = [];
}
=======
  
    protected $fillable = [
        'judul', 'jenis' , 'kategori' ,'created_at' ,'cover', 'deskripsi'
    ];
}
>>>>>>> Farhan_PBI:app/Models/blogs.php
