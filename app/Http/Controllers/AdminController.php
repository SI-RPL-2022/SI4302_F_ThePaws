<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use App\Models\pethouse;
use App\Models\Workings;
use App\Models\Food;
use App\Models\Vaccine;
use App\Models\Umur;
use App\Models\BB;
use App\Models\User;
use App\Models\About;

use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function dashboardAdmin()
    {
        $total_user = User::count();
        $article = Blog::count();
        return view('admin.dashboard',compact('total_user','article'));
    }

    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function aboutUsShow()
    {
        $data = About::all()->first();
        return view('admin.aboutUsShow', compact('data'));
    }
    public function aboutUsStore(Request $request)
    {
        $validate = $request->validate([
            'text' => 'required',
        ]);
        $data = About::all()->first();
        if($data !== null) {
            $data->text = $request->text;
            $data->save();
        } else {
            $about = About::create($validate);
        }
        return redirect(route('admin.aboutus.show'))->with('success', 'Data Berhasil Disimpan');
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
    $kategori1 = Kategori::all();
    $kategori2 = Kategori2::all();
    return view('blogs.index', compact('blogs'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
}

public function createBlog()
    {
        $kategori1 = Kategori::all();
        $kategori2 = Kategori2::all();
        return view('blogs.create', compact('kategori1', 'kategori2'));
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
        $kategori1 = Kategori::all();
        $kategori2 = Kategori2::all();
        return view('blogs.edit', compact('blogs', 'kategori1', 'kategori2'));
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

    public function indexPethouse()
    {
        $pethouses = pethouse::latest()->paginate(5);
        return view('admin.editpethouse', compact('pethouses'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function createPethouse()
    {
        return view('admin.create_pethouse');
    }
    public function editPethouse($id)
    {
        $pethouse = pethouse::find($id);
        $kategori1 = Kategori::all();
        $kategori2 = Kategori2::all();
        $workinghours = Workings::where('pethouse', $id)->get();
        // dd(empty($workinghours[0]));
        return view('admin.editpethouse1', compact('pethouse', 'workinghours', 'kategori1', 'kategori2'));
    }
    public function storePethouse(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'alamat'=>'required',
            'no_telepon'=>'required',
            'website'=>'required',
            'rating'=>'required',
            'maps'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required',
        ]);

        if ($validatedData) {
            $pethouse = new pethouse;
            $pethouse->nama = $request->name;
            $pethouse->alamat = $request->alamat;
            $pethouse->no_telepon = $request->no_telepon;
            $pethouse->website = $request->website;
            $pethouse->rating = $request->rating;
            $pethouse->maps = $request->maps;
            $pethouse->foto = $request->file('foto')->store('vet');
            $pethouse->deskripsi = htmlspecialchars($request->deskripsi);
            $pethouse->save();
            return redirect('/admin/pethouse')->with('success', 'Game Data is successfully updated');
        }

        }
    public function updatePethouse(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'alamat'=>'required',
            'no_telepon'=>'required',
            'website'=>'required',
            'rating'=>'required',
            'maps'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required',
        ]);

        if ($validatedData) {
            $pethouse = pethouse::find($id);
            $pethouse->nama = $request->name;
            $pethouse->alamat = $request->alamat;
            $pethouse->no_telepon = $request->no_telepon;
            $pethouse->website = $request->website;
            $pethouse->rating = $request->rating;
            $pethouse->maps = $request->maps;
            $pethouse->foto = $request->file('foto')->store('vet');
            $pethouse->deskripsi = htmlspecialchars($request->deskripsi);
            $pethouse->save();

            $wh = Workings::where('pethouse', $id)->get();
            if (empty($wh->first())) {
                foreach ($_POST['day'] as $key => $value) {
                    $workinghours = new Workings;
                    $workinghours->pethouse = $id;
                    $workinghours->day = $key;
                    // dd($key);
                    // dd($request['open'][$key-1]);
                    $workinghours->open = $request['open'][($key)-1];
                    $workinghours->close = $request['close'][($key)-1];
                    $workinghours->save();
                }
            } else {
                foreach($wh as $key => $value) {
                    $id = $value->id;
                    foreach ($_POST['day'] as $key => $value) {
                        $workinghours = Workings::find($id);
                        if ($workinghours->day == $value) {
                            $workinghours->open = $request['open'][($key)-1];
                            $workinghours->close = $request['close'][($key)-1];
                            $workinghours->save();
                        }
                    }
                }
            }

            return redirect('/admin/pethouse')->with('success', 'Game Data is successfully updated');
        }

        }



    public function destroyPethouse($id)
    {

        $pethouses = pethouse::findOrFail($id);
        $delete = $pethouses->delete();

        if ($delete) {
            Session::flash('success', 'Berhasil hapus data');
            return redirect()->back();
        } else {
            Session::flash('errors', 'Gagal hapus data');
            return redirect()->back();
        }
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

    public function indexCarecommend()
    {
        $data1 = Food::all();
        $data2 = Vaccine::all();
        $data3 = Kategori::all();
        $data4 = Umur::all();
        $data5 = BB::all();

        return view('admin.carerecommend', compact('data1', 'data2', 'data3', 'data4', 'data5'));
    }

    public function createFood()
    {
        $kategori = Kategori::all();
        $umur = Umur::all();
        $bb = BB::all();
        return view('admin.create_food', compact('kategori', 'umur', 'bb'));
    }

    public function editFood($id)
    {
        $food = Food::find($id);
        $kategori = Kategori::all();
        $umur = Umur::all();
        $bb = BB::all();
        return view('admin.edit_food', compact('food', 'kategori', 'umur', 'bb'));
    }

    public function storeFood(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'kategori' => "required",
            'umur'=>'required',
            'berat_badan'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required',
        ]);
        if ($validatedData) {
            $food = new Food;
            $food->nama = $request->name;
            $food->kategori = $request->kategori;
            $food->umur = $request->umur;
            $food->berat_badan = $request->berat_badan;
            $food->foto = $request->file('foto')->store('food');
            $food->deskripsi = htmlspecialchars($request->deskripsi);
            $food->save();
            return redirect('/admin/carecommend')->with('success', 'Game Data is successfully updated');
    }
}
    public function updateFood(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'kategori' => "required",
            'umur'=>'required',
            'berat_badan'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required',
        ]);
        if ($validatedData) {
            $food = Food::find($id);
            $food->nama = $request->name;
            $food->kategori = $request->kategori;
            $food->umur = $request->umur;
            $food->berat_badan = $request->berat_badan;
            $food->foto = $request->file('foto')->store('food');
            $food->deskripsi = htmlspecialchars($request->deskripsi);
            $food->save();
            return redirect('/admin/carecommend')->with('success', 'Game Data is successfully updated');
    }
}

public function destroyFood($id)
{
    $food = Food::findOrFail($id);
    $delete = $food->delete();

    if ($delete) {
        Session::flash('success', 'Berhasil hapus data');
        return redirect()->back();
    } else {
        Session::flash('errors', 'Gagal hapus data');
        return redirect()->back();
    }
}
    public function createVaccine()
    {
        $kategori = Kategori::all();
        $umur = Umur::all();
        $bb = BB::all();
        return view('admin.create_vaccine', compact('kategori', 'umur', 'bb'));
    }

    public function editVaccine($id)
    {
        $vaccine = Vaccine::find($id);
        $kategori = Kategori::all();
        return view('admin.edit_vaccine', compact('vaccine', 'kategori'));
    }

    public function storeVaccine(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'kategori' => "required",
            'umur'=>'required',
            'berat_badan'=>'required',
            'deskripsi'=>'required',
        ]);
        if ($validatedData) {
            $vaccine = new Vaccine;
            $vaccine->nama = $request->name;
            $vaccine->kategori = $request->kategori;
            $vaccine->umur = $request->umur;
            $vaccine->berat_badan = $request->berat_badan;
            $vaccine->deskripsi = htmlspecialchars($request->deskripsi);
            $vaccine->save();
            return redirect('/admin/carecommend')->with('success', 'Game Data is successfully updated');
    }
}
    public function updateVaccine(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => "required",
            'kategori' => "required",
            'umur'=>'required',
            'berat_badan'=>'required',
            'deskripsi'=>'required',
        ]);
        if ($validatedData) {
            $vaccine = Vaccine::find($id);
            $vaccine->nama = $request->name;
            $vaccine->kategori = $request->kategori;
            $vaccine->umur = $request->umur;
            $vaccine->berat_badan = $request->berat_badan;
            $vaccine->deskripsi = htmlspecialchars($request->deskripsi);
            $vaccine->save();
            return redirect('/admin/carecommend')->with('success', 'Game Data is successfully updated');
    }
}

public function destroyVaccine($id)
{
    $vaccine = Vaccine::findOrFail($id);
    $delete = $vaccine->delete();

    if ($delete) {
        Session::flash('success', 'Berhasil hapus data');
        return redirect()->back();
    } else {
        Session::flash('errors', 'Gagal hapus data');
        return redirect()->back();
    }
}

public function createUmur()
    {
        return view('admin.create_umur');
    }

    public function storeUmur(Request $request)
    {
        $validate = $request->validate([
            'umur' => 'required'
        ]);

        $umur = Umur::create([
            'umur' => $request->umur
        ]);

        return redirect(route('admin.carecommend'))->with('success1', 'Data Berhasil Ditambahkan');
    }

    public function editUmur($id)
    {
        $umur = Umur::find($id);

        return view('admin.edit_umur', compact('umur'));
    }

    public function updateUmur(Request $request, $id)
    {
        $validate = $request->validate([
            'umur' => 'required'
        ]);
        $umur = Umur::find($id);
        $umur->umur = $request->umur;
        $umur->save();
        return redirect(route('admin.carecommend'))->with('success1', 'Data Berhasil Ditambahkan');
    }

    public function destroyUmur($id)
{
    $umur = Umur::findOrFail($id);
    $delete = $umur->delete();

    if ($delete) {
        Session::flash('success', 'Berhasil hapus data');
        return redirect()->back();
    } else {
        Session::flash('errors', 'Gagal hapus data');
        return redirect()->back();
    }
}
public function createBB()
    {
        return view('admin.create_berat_badan');
    }

    public function storeBB(Request $request)
    {
        $validate = $request->validate([
            'bb' => 'required'
        ]);

        $bb = BB::create([
            'bb' => $request->bb
        ]);

        return redirect(route('admin.carecommend'))->with('success1', 'Data Berhasil Ditambahkan');
    }

    public function editBB($id)
    {
        $bb = BB::find($id);
        return view('admin.edit_berat_badan', compact('bb'));
    }

    public function updateBB(Request $request, $id)
    {
        $validate = $request->validate([
            'bb' => 'required'
        ]);
        $bb = BB::find($id);
        $bb->bb = $request->bb;
        $bb->save();
        return redirect(route('admin.carecommend'))->with('success1', 'Data Berhasil Ditambahkan');
    }

    public function destroyBB($id)
{
    $bb = BB::findOrFail($id);
    $delete = $bb->delete();

    if ($delete) {
        Session::flash('success', 'Berhasil hapus data');
        return redirect()->back();
    } else {
        Session::flash('errors', 'Gagal hapus data');
        return redirect()->back();
    }
}

    public function indexAdoption()
    {
        return view('admin.edit_adoption');
    }
    public function createAdoption()
    {
        return view('admin.create_adoption');
    }
}
