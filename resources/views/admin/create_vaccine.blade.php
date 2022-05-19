@extends('admin-layouts.main')
@section('container')
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">

                <form action="{{ route('admin.vaccine.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nama Vaksin</label>
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
                        <select class="form-select" name="kategori" id="">
                            <option selected>Pilih Kategori</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control form-control-sm @error('umur') is-invalid @enderror"
                            name="umur" id="umur">
                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="text" class="form-control form-control-sm @error('berat_badan') is-invalid @enderror"
                            name="berat_badan" id="berat_badan">
                        @error('berat_badan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control form-control-sm @error('deskripsi') is-invalid @enderror"
                            name="deskripsi" id="deskripsi">
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
