<?php
  
namespace App\Http\Controllers;
   
use App\Models\blogs;
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
        $blogs = blogs::latest()->paginate(5);
        
        return view('blogs.index',compact('blogs'))
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
    
        blogs::create($request->all());
     
        return redirect()->route('blogs.index')
                        ->with('success','blogs created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = blogs::find($id);
        // dd($blog);
        return view('blogs.show',compact('blog'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = blogs::find($id);
        return view('blogs.edit',compact('blogs'));
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
        $blog = blogs::find($id);
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

        $blogs = blogs::findOrFail($id);
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