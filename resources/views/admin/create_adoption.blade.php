@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col-9 col-sm-10 ">
            <form action="#" enctype="multipart/form-data" method="post">
                <div class="form-group mb-3">
                    <label for="name">Nama Peliharaan</label>
                    <input type="text" class="form-control form-control-sm"
                        name="name" id="name">
                </div>

                <div class="form-group mb-3">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control form-control-sm"
                        name="kategori" id="kategori">
                </div>

                <div class="form-group mb-3">
                    <label for="kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control form-control-sm"
                        name="kelamin" id="kelamin">
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
                    <label for="berat">Website</label>
                    <input type="text" class="form-control form-control-sm"
                        name="berat" id="berat">
                </div>

                <div class="form-group mb-3">
                    <label for="noHP">No HP Pemilik</label>
                    <input type="text" class="form-control form-control-sm"
                        name="noHP" id="noHP">
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
                    <textarea name="deskripsi" id="deskripsi"
                        class="form-control form-control-sm "></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-sm mt-2 fw-bold" type="submit"
                        style="background-color: #8DB1F3;color:white;border-radius:12px;">Tambah</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
