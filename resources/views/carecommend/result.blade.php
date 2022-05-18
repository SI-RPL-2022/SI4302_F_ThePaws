@extends('layouts.main')
@section('container')
    <div class="container mt-4">'
        <div class="row">
            <div class="col-5">
                <div class="card-body text-start">
                    <div class="mb-3 text-start">
                        <h2 class="text-start"><a href="{{ url('/carecommend') }}"
                                class="text-decoration-none text-black">CaRecommend&nbsp;</a><span>/ details</span></h2>
                        <p class="text-start" style="font-size:20px">CaRecommend merupakah fitur yang ada di website The
                            Paws.
                            Cara kerja nya dengan cara menginputkan detail informasi peliharaan kamu, nama, umur dan berat
                            badan.
                            Maka system akan merekomendasi kan makanan dan vaksin yang sesuai untuk peliharaan kamu.</p>
                        <img class="img-fluid" alt="100%x280" src="{{ asset('img/CaRecommend.png') }}">
                    </div>
                </div>
            </div>

            <div class="col-7 pt-5 pb-5">
                <div class="card border-dark mb-3" style="max-width: 40rem;">
                    <div class="row">
                        @if ($kategori == 1)
                            <div class="col my-3 py-3 text-center">
                                <img alt="100%x280" width="120" height="120"
                                    src="{{ asset('img/carecommend/doggo 1.png') }}">
                                <div class="form-check mt-3 d-flex justify-content-center">
                                    <label class="form-check-label mx-1" for="kategori1">Anjing</label>
                                </div>
                            </div>
                        @elseif ($kategori == 2)
                            <div class="col my-3 py-3 text-center">
                                <img alt="100%x280" width="120" height="120"
                                    src="{{ asset('img/carecommend/cat 1.png') }}">
                                <div class="mt-3">
                                    <label class="form-check-label mx-1" for="kategori1">Kucing</label>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="card-body " align="center">
                        <div class="mb-3" style="width: 90%" align="left">{{ $validate['nama'] }}</div>
                        <div class="mb-3" style="width: 90%" align="left">{{ $validate['umur'] }}</div>
                        <div class="mb-3" style="width: 90%" align="left">{{ $validate['berat_badan'] }}</div>
                        <hr>
                        <div class="mb-3 align-center" style="width: 90%" align="left">
                            @foreach ($foods as $k)
                                <div class="row">
                                    <div class="col col-6">
                                        <div class="row">
                                            <div class="col">
                                                <p class="text-justify">
                                                    {{ 'Makanan yang di rekomendasi kan untuk peliharaanmu yaitu ' . $k->nama . '. ' . $k->deskripsi . '' }}
                                                </p>
                                            </div>
                                        </div>
                                        @foreach ($vaccines as $v)
                                            <div class="row">
                                                <div class="col">
                                                    <p class="text--justify">
                                                        {{ 'Vaksin yang di rekomendasikan yaitu ' . $v->nama . ' (' . $v->deskripsi . ')' }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="col col-6">
                                        <img src="{{ asset('img/foods/' . $k->foto . '') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
