@extends('admin-layouts.main')
@section('container')
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
                <form action="{{  '/admin/carecommend/food/update/'.$food->id.''  }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nama Makanan</label>
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                            name="name" id="name" value="{{ $food->nama }}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="kategori">Kategori Hewan</label>
                        <select class="form-select form-select-sm" name="kategori" id="">
                            <option>Pilih Kategori</option>
                            @foreach ($kategori as $k)
                                <option value="{{ $k->id }}"
                                    @if ($k->id == $food->kategori)
                                        {{ 'selected' }}
                                    @endif>{{ $k->nama }}</option>
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
                        <select class="form-select form-select-sm" name="umur" id="">
                            <option>Pilih Umur</option>
                            @foreach ($umur as $u)
                                <option value="{{ $u->id }}"
                                    @if ($u->id == $food->umur)
                                        {{ 'selected' }}
                                    @endif>{{ $u->umur }}</option>
                            @endforeach
                        </select>
                        @error('umur')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="berat_badan">Berat Badan</label>
                        <select class="form-select form-select-sm" name="berat_badan" id="">
                            <option>Pilih Berat Badan</option>
                            @foreach ($bb as $b)
                                <option value="{{ $b->id }}"
                                    @if ($b->id == $food->berat_badan)
                                        {{ 'selected' }}
                                    @endif>{{ $b->bb }}</option>
                            @endforeach
                        </select>
                        @error('berat_badan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control form-control-sm @error('deskripsi') is-invalid @enderror"
                            name="deskripsi" id="deskripsi" value="{{ $food->deskripsi }}">
                        @error('deskripsi')
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
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-sm mt-2 fw-bold" type="submit"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
