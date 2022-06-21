@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col px-3">
            <form action="{{ route('admin.adoption.store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama_peliharaan">Nama Peliharaan</label>
                    <input type="text" class="form-control form-control-sm"
                        name="nama_peliharaan" id="nama_peliharaan">
                </div>

                <div class="form-group mb-3">
                    <label for="kategori">Kategori</label>
                    <select type="text" class="form-select form-select-sm"
                        name="kategori" id="kategori">
                        <option value="" selected>Pilih Kategori</option>
                        @foreach ($kategori as $k)
                                <option value="{{ $k->id }}">{{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="jenis_kelamin"> Jenis Kelamin</label>
                    <select type="text" class="form-select form-select-sm"
                        name="jenis_kelamin" id="jenis_kelamin">
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        <option value="Jantan">Jantan</option>
                        <option value="Betina">Betina</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="ras">Ras</label>
                    <input type="text" class="form-control form-control-sm"
                        name="ras" id="ras">
                </div>

                <div class="form-group mb-3">
                    <label for="umur">Umur</label>
                    <input type="text" class="form-control form-control-sm"
                        name="umur" id="umur">
                </div>

                <div class="form-group mb-3">
                    <label for="berat">Berat</label>
                    <input type="text" class="form-control form-control-sm"
                        name="berat" id="berat">
                </div>

                <div class="form-group mb-3">
                    <label for="no_hp">Nomor HP Pemilik</label>
                    <input type="text" class="form-control form-control-sm"
                        name="no_hp" id="no_hp">
                </div>

                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control form-control-sm"
                        name="alamat" id="alamat">
                </div>

                <div class="form-group mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control form-control-sm"
                        name="foto" id="foto">
                </div>

                <div>
                    <label for="deskripsi">Deskripsi Tentang Peliharaan</label>
                    <textarea name="deskripsi" id="editor1" class="form-control form-control-sm"></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-sm mt-2 fw-bold" type="submit"
                        style="background-color: #8DB1F3;color:white;border-radius:12px;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection