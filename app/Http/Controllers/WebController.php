<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Kategori;
use App\Models\Kategori2;
use App\Models\pethouse;
use App\Models\Food;
use App\Models\Vaccine;
use App\Models\Umur;
use App\Models\Workings;
use App\Models\BB;
use App\Models\About;
use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function index () {
        $blogs = Blog::orderby('updated_at', 'DESC')->get();
        $kategori1 = Kategori::all();
        $kategoris = Kategori2::all();
        return view('index', compact('blogs'));
    }

    public function about () {
        $data = About::all()->first();
        return view('aboutus', compact('data'));
    }
    public function pethouse_index () {
        $pethouses = pethouse::latest()->simplePaginate(6);
        $populer = pethouse::orderby('rating', 'DESC')->get();
        return view('pethouse', compact('pethouses', 'populer'))
        ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function pethouse_search (Request $request) {
        $pethouses = pethouse::where('nama', 'LIKE', '%'. $request->nama . '%')->simplePaginate(6);
        $populer = pethouse::orderby('rating', 'DESC')->get();
        $history = $request->nama;
        if($pethouses->count() > 0) {
            return view('pethouse', compact('pethouses', 'populer', 'history'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return view('pethouse', compact('populer', 'history'));
        }
        
    }
    public function pethouse_result ($pethouses) {
        $pethouses = $pethouses;

        return view('pethouse_result', compact($pethouses));
        
    }

    public function pethouse_details(Request $request, $id)
    {
        $pethouse = pethouse::find($id);
        $populer = pethouse::orderby('rating', 'DESC')->get();
        $workinghours = Workings::where('pethouse', $id)->get();
        return view('pethouse_details', compact('pethouse', 'workinghours', 'populer'));
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

    public function indexAdoption()
    {
        $anjings = Adoption::where('kategori', 1)->paginate(
            $perPage = 3, $columns = ['*'], $pageName = 'anjings'
        );
        $kucings = Adoption::where('kategori', 2)->paginate(
            $perPage = 3, $columns = ['*'], $pageName = 'kucings'
        );
        // $anjings = Adoption::where('kategori', 1)->paginate(3);
        // $kucings = Adoption::where('kategori', 2)->paginate(3)->setPageName('kucings');
        $kategori = Kategori::all();
        return view('adoption.index', compact('anjings', 'kucings', 'kategori'));
    }
    public function detailAdoption($id)
    {
        $data = Adoption::find($id);
        $kategori = Kategori::all();
        return view('adoption.detail', compact('data', 'kategori'));
    }
}
