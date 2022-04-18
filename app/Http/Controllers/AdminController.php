<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }

    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function index()
    {
        return view('admin.index');
    }



    public function showCategory()
    {
        $data1 = Kategori::all();
        $data2 = Kategori2::all();

        return view('admin.show_category', compact('data1', 'data2'));
    }

    public function tambahCategory1()
    {
        return view('admin.tambah_category1');
    }

    public function tambahCategory2()
    {
        return view('admin.tambah_category2');
    }

    public function storeCategory1(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $category = Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect(route('admin.category'))->with('success1', 'Data Berhasil Ditambahkan');
    }

    public function storeCategory2(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $category = Kategori2::create([
            'nama' => $request->nama
        ]);

        return redirect(route('admin.category'))->with('success2', 'Data Berhasil Ditambahkan');
    }

    public function editCategory1($id)
    {
        $data = Kategori::find($id);

        return view('admin.edit_category1', compact('data'));
    }

    public function editCategory2($id)
    {
        $data = Kategori2::find($id);

        return view('admin.edit_category2', compact('data'));
    }

    public function updateCategory1(Request $request, $id)
    {
        $data = Kategori::find($id);

        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $data->nama = $request->nama;

        $data->save();

        return redirect(route('admin.category'))->with('success1', 'Data Berhasil Diubah');
    }

    public function updateCategory2(Request $request, $id)
    {
        $data = Kategori2::find($id);

        $validate = $request->validate([
            'nama' => 'required'
        ]);

        $data->nama = $request->nama;

        $data->save();

        return redirect(route('admin.category'))->with('success2', 'Data Berhasil Diubah');
    }
    public function deleteCategory1($id)
    {

        $data = Kategori::findOrFail($id);
        $delete = $data->delete();

        if ($delete) {
            Session::flash('success1', 'Berhasil hapus data');
            return redirect()->back();
        } else {
            Session::flash('errors1', 'Gagal hapus data');
            return redirect()->back();
        }
}
    public function deleteCategory2($id)
    {

        $data = Kategori2::findOrFail($id);
        $delete = $data->delete();

        if ($delete) {
            Session::flash('success2', 'Berhasil hapus data');
            return redirect()->back();
        } else {
            Session::flash('errors2', 'Gagal hapus data');
            return redirect()->back();
        }
}

public function indexBlog()
{
    $blogs = Blog::latest()->paginate(5);
    return view('blogs.index', compact('blogs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}

public function createBlog()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBlog(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'kategori1' => 'required',
            'kategori2' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);
        if ($foto = $request->file('foto')) {
            $destinationPath = 'img';  
            $fileSource1 = $foto->getClientOriginalName();
            $foto->move($destinationPath, $fileSource1);
        }

        $data_blog = new Blog;
        $data_blog->judul = $request->judul;
        $data_blog->kategori1 = $request->kategori1;
        $data_blog->kategori2 = $request->kategori2;
        $data_blog->creator = 'Admin';
        $data_blog->foto = $fileSource1;
        $data_blog->deskripsi = htmlspecialchars($request->deskripsi);
        $data_blog->save();

        return redirect()->route('blogs.admin')
            ->with('success', 'blogs created successfully.');
    }

    public function editBlog($id)
    {
        $blogs = Blog::find($id);
        return view('blogs.edit', compact('blogs'));
    }

    public function updateBlog(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'kategori1' => 'required',
            'kategori2' => 'required',
            'foto' => 'required',
            'deskripsi' => 'required',
        ]);
;
        if ($foto = $request->file('foto')) {
            $destinationPath = 'img';  
            $fileSource1 = $foto->getClientOriginalName();
            $foto->move($destinationPath, $fileSource1);
        }

        $data_blog = Blog::find($id);
        $data_blog->judul = $request->judul;
        $data_blog->kategori1 = $request->kategori1;
        $data_blog->kategori2 = $request->kategori2;
        $data_blog->creator = 'Admin';
        $data_blog->foto = $fileSource1;
        $data_blog->deskripsi = htmlspecialchars($request->deskripsi);
        $data_blog->save();

        // blogs::whereId($id)->update($validatedData);

        return redirect('/admin/blogs')->with('success', 'Game Data is successfully updated');
        // return back()->withInput(); 
        // return redirect()->to('blogs.index')->with('success', 'Data Berhasil Diubah');
        // return redirect()->route('blogs.index')
        //                 ->with('success','blogs updated successfully');
    }

        public function destroyBlog($id)
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
}
