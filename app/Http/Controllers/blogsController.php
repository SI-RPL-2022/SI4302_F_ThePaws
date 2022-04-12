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
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',
            'cover' => 'required',
            'deskripsi' => 'required',
        ]);

        Blog::create($request->all());

        return redirect()->route('blogs.index')
            ->with('success', 'blogs created successfully.');
    }

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('blogs.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'jenis' => 'required',
            'kategori' => 'required',

        ]);

        // $blogs->update($request->all());
        $blog = Blog::find($id);
        $blog->judul = $request->judul;
        $blog->jenis = $request->jenis;
        $blog->kategori = $request->kategori;
        $blogs->save();

        // blogs::whereId($id)->update($validatedData);

        return redirect('/blogs')->with('success', 'Game Data is successfully updated');
        // return back()->withInput(); 
        // return redirect()->to('blogs.index')->with('success', 'Data Berhasil Diubah');
        // return redirect()->route('blogs.index')
        //                 ->with('success','blogs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {

        $blogs = Blog::findOrFail($id);
        $delete = $blogs->delete();

        if ($delete) {
            Session::flash('success', 'Berhasil hapus data');
            return redirect()->back();
        } else {
            Session::flash('errors', 'Gagal hapus data');
            return redirect()->back();
        }
    }
    // public function destroy(blogs $blogs)
    // {
    //     $blogs->delete();

    //     return redirect()->route('blogs.index')
    //                     ->with('success','blogs deleted successfully');
    // }
}
