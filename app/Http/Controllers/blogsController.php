<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use Illuminate\Http\Request;


class blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('blogs.blogs', compact('blogs', 'kategori1', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $blog = Blog::find($id);
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('blogs.blogsdetails', compact('blog', 'blogs', 'kategori1', 'kategoris'));
    }
    public function filter(Request $request)
    {   
        $nama = $request->nama;
        $kategoris1 = Kategori::all();
        $kategoris2 = Kategori2::all();
        if (($kategori1 = Kategori::where('nama', $nama)->first())){
            $blogs = Blog::where('kategori1', $kategori1->id)->get();
            return view('blogs.filter', compact('blogs', 'nama', 'kategoris1', 'kategoris2'));
        } elseif (($kategoris = Kategori2::where('nama', $nama)->first())) {
            $blogs = Blog::where('kategori2', $kategoris->id)->get();
            return view('blogs.filter', compact('blogs', 'nama', 'kategoris1', 'kategoris2'));
        } else {
            dd('tidak ditemukan');
        }
    }
    public function destroy(Blog $blogs)
    {
        $blogs->delete();

        return redirect()->route('blogs.index')
                        ->with('success','blogs deleted successfully');
    }
}
