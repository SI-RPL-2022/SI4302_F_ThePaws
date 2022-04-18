@extends('admin-layouts.main')
@section('container')
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
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

                <form action="{{ route('blogs.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="row">
                        <div class="pull-right mt-5 mb-3">
                            <div class="form-group">
                                <label for="">Judul Artikel</label>
                                <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror"
                                    name="judul" id="judul">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="">Kategori Hewan</label>
                                <input type="text" class="form-control form-control-sm @error('kategori1') is-invalid @enderror"
                                    name="kategori1" id="kategori1">
                                @error('kategori1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Kategori Informasi</label>
                            <input type="text" class="form-control form-control-sm @error('kategori2') is-invalid @enderror"
                                name="kategori2" id="kategori2">
                            @error('kategori2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <label for="">Foto</label>
                    <input type="file" class="form-control form-control-sm @error('foto') is-invalid @enderror"
                        name="foto" id="foto" value="{{ old('foto') }}">
                    @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label for="">Deskripsi Berita</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="form-control form-control-sm @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-sm mt-2 fw-bold" type="submit"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
