@extends('admin-layouts.main')

@section('container')
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
                <div class="pull-left">
                    <h2>Edit Pethouse</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('admin.pethouse') }}"> Back</a>
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

                <form action="{{ url('/admin/pethouse/update/' . $pethouses->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <!-- @method('PUT') -->

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Vet</strong>
                                <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror"
                                    value="{{ $pethouses->nama }}" name="nama">
                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Kategori</strong>
                                <input class="form-control" id="kategori" name="kategori" placeholder="kategori"
                                    value="{{ $pethouses->kategori }}"></input>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Alamat</strong>
                                    <input class="form-control" id="alamat" name="alamat"
                                        placeholder="alamat" value="{{ $pethouses->alamat }}"></input>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No telepon</strong>
                                    <input class="form-control" id="no_telp" name="no_telp"
                                        placeholder="no_telp" value={{ $pethouses->no_telp }}></input>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Website</strong>
                                    <input class="form-control" id="website" name="website"
                                        placeholder="website" value={{ $pethouses->website }}></input>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jam operasional</strong>
                                    <input class="form-control" id="jam_operasional" name="jam_operasional"
                                        placeholder="jam_operasional" value={{ $pethouses->jam_operasional }}></input>
                                </div>
                            </div>
                            <label for="">Cover</label>
                            <input type="file" class="form-control form-control-sm @error('cover') is-invalid @enderror"
                                name="cover" id="cover">
                            @error('cover')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Deskripsi tentang Pethouse</label>
                            <textarea name="deskripsi" id="deskripsi"
                                class="form-control form-control-sm @error('deskripsi') is-invalid @enderror">{{ $pethouses->deskripsi }}</textarea>
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
            </div>
        </div>
    </div>
@endsection
