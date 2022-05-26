@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col-9 col-sm-10 ">

            <form action="{{ route('admin.pethouse.store') }}" enctype="multipart/form-data"
                method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nama Vet</label>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                        name="name" id="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kategori">Kategori Hewan</label>
                    <select class="form-select" name="kategori1" id="">
                        <option selected>Pilih Kategori</option>
                        @foreach ($kategori1 as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kategori">Kategori Informasi</label>
                    <select class="form-select" name="kategori12" id="">
                        <option selected>Pilih Kategori</option>
                        @foreach ($kategori2 as $k)
                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror"
                        name="alamat" id="alamat">
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" class="form-control form-control-sm @error('no_telepon') is-invalid @enderror"
                        name="no_telepon" id="no_telepon">
                    @error('no_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="website">Website</label>
                    <input type="text" class="form-control form-control-sm @error('website') is-invalid @enderror"
                        name="website" id="website">
                    @error('website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control form-control-sm @error('rating') is-invalid @enderror"
                        name="rating" id="rating" min="0" max="0" step="0.1">
                    @error('rating')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="maps">Maps</label>
                    <input type="text" class="form-control form-control-sm @error('maps') is-invalid @enderror"
                        name="maps" id="maps">
                    @error('maps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control form-control-sm @error('foto') is-invalid @enderror"
                        name="foto" id="foto" value="{{ old('foto') }}">
                    @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="form-control form-control-sm @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button class="btn btn-sm mt-2 fw-bold" type="submit"
                        style="background-color: #8DB1F3;color:white;border-radius:12px;">Tambah</button>
                </div>
                {{-- LINE --}}
            </form>
        </div>
    </div>
    @endsection
