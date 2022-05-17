<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use App\Models\pethouse;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index () {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('index', compact('blogs'));
    }
    public function pethouse_index () {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $pethouses = pethouse::latest()->paginate(6);
        $populer = pethouse::orderby('rating', 'DESC')->get();
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('pethouse', compact('pethouses', 'blogs', 'kategori1', 'kategoris', 'populer'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }
}
