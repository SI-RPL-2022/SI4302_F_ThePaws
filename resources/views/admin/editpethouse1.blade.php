@extends('admin-layouts.main')
@section('container')
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">

                <form action="http://127.0.0.1:8000/admin/blogs/create" enctype="multipart/form-data" method="POST"
                    data-dashlane-rid="e1e5c66d6bb14fd9" data-form-type="other">
                    <input type="hidden" name="_token" value="IyIlm7NndKblydRoaZ8zN8QMp5ym0KohenyyZWEy">
                    <div class="row">
                        <div class="pull-right mt-5 mb-3">
                            <div class="form-group">
                                <label for="">Nama Vet</label>
                                <input type="text" class="form-control form-control-sm " name="judul" id="judul"
                                    data-dashlane-rid="4189cd566019e46b" data-form-type="other">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <label for="">Kategori Hewan</label>
                                <input type="text" class="form-control form-control-sm " name="kategori1" id="kategori1"
                                    data-dashlane-rid="1aaed23a01360102" data-form-type="other">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Kategori Informasi</label>
                            <input type="text" class="form-control form-control-sm " name="kategori2" id="kategori2"
                                data-dashlane-rid="a11e73180e4aff36" data-form-type="other">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Alamat</label>
                            <input type="text" class="form-control form-control-sm " name="kategori2" id="kategori2"
                                data-dashlane-rid="a11e73180e4aff36" data-form-type="other">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">No Telepon</label>
                            <input type="text" class="form-control form-control-sm " name="kategori2" id="kategori2"
                                data-dashlane-rid="a11e73180e4aff36" data-form-type="other">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <label for="">Website</label>
                            <input type="text" class="form-control form-control-sm " name="kategori2" id="kategori2"
                                data-dashlane-rid="a11e73180e4aff36" data-form-type="other">
                        </div>
                    </div>
                    <label for="">Jam Operasional</label>
                    <textarea name="jamoperasional" id="jamoperasional" class="form-control form-control-sm " data-dashlane-rid="d117c1ad78de2c59"
                        data-form-type="other"></textarea>
                    <label for="">Foto</label>
                    <input type="file" class="form-control form-control-sm " name="foto" id="foto" value=""
                        data-dashlane-rid="e1cf8e4fd4557fa6" data-form-type="other">
                    <label for="">Deskripsi Tentang Peliharaan</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control form-control-sm " data-dashlane-rid="d117c1ad78de2c59"
                        data-form-type="other"></textarea>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-sm mt-2 fw-bold" type="submit"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;"
                            data-dashlane-rid="e63890473292f0e6" data-dashlane-label="true"
                            data-form-type="other">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
