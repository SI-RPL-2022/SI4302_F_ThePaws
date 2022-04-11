<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class blogs extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'judul', 'jenis' , 'kategori' ,'created_at' ,'cover', 'deskripsi'
    ];
}