<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index () {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('index', compact('blogs'));
    }
}
