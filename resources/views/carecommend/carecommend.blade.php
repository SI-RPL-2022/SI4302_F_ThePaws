@extends('layouts.main')
@section('container')
    <div class="container mt-4">'
        <div class="row">
            <div class="col-5">
                <div class="card-body text-start">
                    <div class="mb-3 text-start">
                        <h1 class="text-start">CaRecommend</h1>
                        <p class="text-start" style="font-size:20px">CaRecommend merupakah fitur yang ada di website The
                            Paws.
                            Cara kerja nya dengan cara menginputkan detail informasi peliharaan kamu, nama, umur dan berat
                            badan.
                            Maka system akan merekomendasi kan makanan dan vaksin yang sesuai untuk peliharaan kamu.</p>
                        <img class="img-fluid" alt="100%x280" src="img/CaRecommend.png">
                    </div>
                </div>
            </div>

            <div class="col-7 pt-5 pb-5">
                <div class="card border-dark mb-3" style="max-width: 40rem;">
                    <form action="/carecommend/result" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row">
                            <div class="col col-6 my-3 py-3 text-center">
                                <img alt="100%x280" width="120" height="120" src="img/carecommend/cat 1.png">
                                <div class="form-check mt-3 d-flex justify-content-center">
                                    <input class="form-check-input mx-1" type="radio" name="kategori" value="2">
                                    <label class="form-check-label mx-1" for="kategori">Kucing</label>
                                </div>
                            </div>
                            <div class="col col-6 my-3 py-3 text-center">
                                <img alt="100%x280" width="120" height="120" src="img/carecommend/doggo 1.png">
                                <div class="form-check mt-3 d-flex justify-content-center">
                                    <input class="form-check-input mx-1" type="radio" name="kategori" value="1">
                                    <label class="form-check-label mx-1" for="kategori">Anjing</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-body " align="center">
                            <div class="mb-3" style="width: 60%" align="left">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3" style="width: 60%" align="left">
                                <label for="">Umur</label>
                                <select class="form-select" name="umur">
                                    <option selected>Pilih Umur</option>
                                    @foreach ($umur as $u)
                                        <option value="{{ $u->id }}">{{ $u->umur }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="width: 60%" align="left">
                                <label for="">Berat Badan</label>
                                <select class="form-select" name="berat_badan" aria-label="Default select example">
                                    <option selected>Pilih Berat Badan</option>
                                    @foreach ($bb as $b)
                                        <option value="{{ $b->id }}">{{ $b->bb }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3" style="width: 60%" align="left">
                                <button class="btn btn-sm mt-2 fw-bold" type="submit"
                                    style="background-color: #8DB1F3;color:white;border-radius:12px;">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
