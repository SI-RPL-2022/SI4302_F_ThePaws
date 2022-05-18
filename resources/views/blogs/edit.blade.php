@extends('admin-layouts.main')

@section('container')
<<<<<<< HEAD
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
                <div class="pull-left">
                    <h2>Edit Artikel</h2>
=======
    <div class="row">
    @include('admin-layouts.sidebar')
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Artikel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ url('/blogs/update/'.$blogs->id) }}" method="POST">
        @csrf
        <!-- @method('PUT') -->
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Artikel:</strong>
                    <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror" value="{{ $blogs->judul; }}" name="judul">
                    <!-- <input type="text" name="judul" value="{{ $blogs->judul }}" class="form-control" placeholder="judul"> -->
>>>>>>> b7c73f7 (Membuat fitur pengelolaan konten oleh admin pada blog (CRUD) #8)
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('blogs.admin') }}"> Back</a>
                </div>
<<<<<<< HEAD

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/admin/blogs/update/' . $blogs->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <!-- @method('PUT') -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Judul Artikel</strong>
                                <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror"
                                    value="{{ $blogs->judul }}" name="judul">
                                <!-- <input type="text" name="judul" value="{{ $blogs->judul }}" class="form-control" placeholder="judul"> -->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kategori Hewan</strong>
                                <input class="form-control" id="kategori1" name="kategori1" placeholder="kategori1"
                                    value={{ $blogs->kategori1 }}></input>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Kategori Informasi</strong>
                                    <input class="form-control" id="kategori2" name="kategori2"
                                        placeholder="kategori2" value={{ $blogs->kategori2 }}></input>
                                </div>
                            </div>
                            <label for="">Foto</label>
                            <input type="file" class="form-control form-control-sm @error('foto') is-invalid @enderror"
                                name="foto" id="foto">
                            @error('foto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Deskripsi Berita</label>
                            <textarea name="deskripsi" id="deskripsi"
                                class="form-control form-control-sm @error('deskripsi') is-invalid @enderror">{{ $blogs->deskripsi }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-sm mt-2 fw-bold" type="submit"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;">Update</button>
                    </div>
                </form>
=======
                </div>
                   <label for="">Cover</label>
                    <input type="file" class="form-control form-control-sm @error('cover') is-invalid @enderror" name="cover" value="{{ old('cover') }}">
                      @error('cover')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                            @enderror  
                        </div>               
                     <label for="">Deskripsi Berita</label>
                     <textarea name="deskripsi" id="editor" class="form-control form-control-sm @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                             </span>
                            @enderror
             </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button class="btn btn-sm mt-2 fw-bold" type="submit" style="background-color: #8DB1F3;color:white;border-radius:12px;">Update</button>
>>>>>>> b7c73f7 (Membuat fitur pengelolaan konten oleh admin pada blog (CRUD) #8)
            </div>
        </div>
    </div>
@endsection
