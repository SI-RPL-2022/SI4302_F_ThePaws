@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
<<<<<<< HEAD
        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-12">
=======
                <div class="col-9 col-sm-10 mt-5 pt-5">
>>>>>>> main
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.category.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input type="text" class="form-control form-control-sm @error('nama_kategori') is-invalid @enderror" name="nama_kategori">
                                    @error('nama_kategori')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
<<<<<<< HEAD
                                <button class="btn btn-sm btn-primary mt-2" type="submit">Tambah</button>
=======
                                <button class="btn btn-sm mt-2 fw-bold" type="submit" style="background-color: #8DB1F3;color:white;border-radius:12px;">Tambah</button>
>>>>>>> main
                            </form>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </div>
        </div>
=======
>>>>>>> main
    </div>
</div>
@endsection
