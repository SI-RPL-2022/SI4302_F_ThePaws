<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    public function index(){
        $adoptions = Adoption::all();
        $adoption = $adoptions->first();
        return view('adoption.detail', compact('adoptions', 'adoption'));
    }

    public function show(Request $request, $id)
    {
        $adoptions = Adoption::orderby('updated_at', 'DESC')->get();
        $adoption = Adoption::find($id);
        // $kategori1 = Kategori::all();
        // $kategoris = Kategori2::all();
        // $comment = Comment::where('blog_id', $id)->get();
        
        // $user = DB::table(DB::raw('user u'))->select('u.id', 'u.name', 'u.foto')->get();
        // return view('adoption.detail', compact('blog', 'blogs', 'kategori1', 'kategoris', 'comment'));
        return view('adoption.detail', compact('adoption', 'adoptions'));
    }
}
