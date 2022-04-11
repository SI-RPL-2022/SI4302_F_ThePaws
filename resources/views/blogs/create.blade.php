@extends('admin-layouts.main')
@section('container')
<div class="row">
@include('admin-layouts.sidebar')
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        </div>
        <div class="pull-right">
            <!-- <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a> -->
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
   
<!-- <form action="{{ route('blogs.store') }}" method="POST"> -->
    @csrf
  
     <div class="row">
     <div class="pull-right mt-5 mb-3">
        <div class="form-group">
                    <label for="">Judul Artikel</label>
                    <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror" name="judul">
                      @error('judul')
                      <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                   </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Jenis Hewan</label>
                    <input type="text" class="form-control form-control-sm @error('jenis') is-invalid @enderror" name="jenis">
                      @error('jenis')
                      <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                     @enderror 
                   </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="">Kategori</label>
                    <input type="text" class="form-control form-control-sm @error('kategori') is-invalid @enderror" name="kategori">
                      @error('kategori')
                      <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                    </div>
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
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button class="btn btn-sm mt-2 fw-bold" type="submit" style="background-color: #8DB1F3;color:white;border-radius:12px;">Tambah</button>
    </div>
</form>
</div>
@endsection