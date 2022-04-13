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
        $blogs = Blog::latest()->paginate(5);
        return view('blogs.blogs', compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        $blogs = Blog::all();
        $blog = Blog::find($id);
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('blogs.blogsdetails', compact('blog', 'blogs', 'kategori1', 'kategoris'));
    }

    // public function destroy(blogs $blogs)
    // {
    //     $blogs->delete();

    //     return redirect()->route('blogs.index')
    //                     ->with('success','blogs deleted successfully');
    // }
}
