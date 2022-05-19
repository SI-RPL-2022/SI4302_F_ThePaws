<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use App\Models\pethouse;
use App\Models\Food;
use App\Models\Vaccine;
use App\Models\Umur;
use App\Models\BB;
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

    public function carecommend_index () {
        $umur = Umur::all();
        $bb = BB::all();
        return view('carecommend.carecommend', compact('umur', 'bb'));
    }

    public function carecommend_result (Request $request) {
        $validate = $request->validate([
                    'nama' => 'required',
                    'kategori' => 'required',
                    'umur' => 'required',
                    'berat_badan' => 'required',
                    ]);
        if ($validate) {
            $nama = $request->nama;
            $umur = Umur::where('id', $request->umur)->value('umur');
            $bb = BB::where('id', $request->berat_badan)->value('bb');
            $foods = Food::where('umur', $request->umur)->where('berat_badan', $request->berat_badan)->where('kategori', $request->kategori)->get();
            $vaccines = Vaccine::where('umur', $request->umur)->where('berat_badan', $request->berat_badan)->where('kategori', $request->kategori)->get();
            $kategori = $request->kategori;
        }
        return view('carecommend.result', compact('foods', 'vaccines', 'kategori', 'umur', 'bb', 'nama'));
    }
}
