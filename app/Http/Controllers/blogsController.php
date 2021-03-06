<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
    public function saveComment(Request $request, $id)
    {
        $validate = $request->validate([
            'komentar' => 'required'
        ]);
        $blog = Blog::find($id);
        $comment = new Comment;
        $comment->user_id = $request->user_id;
        $comment->blog_id = $request->blog_id;
        $comment->comment = $request->komentar;
        $comment->save();

        return redirect()->back()->with('success', 'berhasil memposting komentar');
    }

    public function show(Request $request, $id)
    {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $blog = Blog::find($id);
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        $comment = Comment::where('blog_id', $id)->get();
        
        // $user = DB::table(DB::raw('user u'))->select('u.id', 'u.name', 'u.foto')->get();
        return view('blogs.blogsdetails', compact('blog', 'blogs', 'kategori1', 'kategoris', 'comment'));
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
