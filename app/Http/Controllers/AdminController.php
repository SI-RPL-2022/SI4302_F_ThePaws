<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

use Illuminate\Support\Facades\Session;

<<<<<<< HEAD

class AdminController extends Controller
{
=======
class AdminController extends Controller
{

    public function dashboardAdmin()
    {
        return view('admin.dashboard');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }



>>>>>>> main
    public function showCategory()
    {
        $data = Category::all();

        return view('admin.show_category', compact('data'));
    }

    public function tambahCategory()
    {
        return view('admin.tambah_category');
    }

    public function storeCategory(Request $request)
    {
        $validate = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $category = Category::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect(route('admin.category'))->with('success', 'Data Berhasil Ditambahkan');
    }
    public function editCategory($id)
    {
        $data = Category::find($id);

        return view('admin.edit_category', compact('data'));
    }

    public function updateCategory(Request $request, $id)
    {
        $data = Category::find($id);

        $validate = $request->validate([
            'nama_kategori' => 'required'
        ]);

        $data->nama_kategori = $request->nama_kategori;

        $data->save();

        return redirect(route('admin.category'))->with('success', 'Data Berhasil Diubah');
    }
    public function deleteCategory($id)
    {

        $data = Category::findOrFail($id);
        $delete = $data->delete();

        if ($delete) {
            Session::flash('success', 'Berhasil hapus data');
            return redirect()->back();
        } else {
            Session::flash('errors', 'Gagal hapus data');
            return redirect()->back();
        }
<<<<<<< HEAD
    }

=======
>>>>>>> main
}
}