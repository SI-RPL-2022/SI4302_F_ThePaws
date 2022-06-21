@extends('layouts.main')
@section('container')
<div class="card-body text-start p-3">
    <div class="p-3 mb-3 text-start">
        <div class="text-center">
            <h1 class="text-center" style="margin-top: 2%">Adoption</h1>
            <img src="img/adoption/garis.png" alt="">
        </div>
        <br>

        <div class="p-3 card-text mb-1 text-start" style="font-size:20px;">
            <span class="badge" style="background-color:#0000FF;">Anjing</span>
        </div>

        <div class="card-body text-start">

            <div class="container">
                <div class="row">
                    @foreach($anjings as $item)
                        <div class="col-4 mb-3">
                            <div class="card h-100">
                                <img src="{{ asset('img/adoption/'. $item->foto .'') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title crop-text-1">{{ $item->nama_peliharaan }}</h5>
                                    <p class="card-text crop-text-4 text-justify">{{ $item->ras }}</p>
                                    <div class="text-center">
                                        <a href="{{ url('adoptions/detail/'. $item->id .'') }}"
                                            class="btn btn-primary">Kunjungi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $anjings->appends(['kucings' => $kucings->currentPage()])->links() }}
                </div>
            </div>
        </div>

        <div class="card-text mb-1 text-start p-3" style="font-size:20px;">
            <span class="badge" style="background-color:#FF0000;">Kucing</span>
        </div>

        <div class="card-body text-start">

            <div class="container">
                <div class="row">
                    @foreach($kucings as $item)
                        <div class="col-4 mb-3">
                            <div class="card h-100">
                                <img src="{{ asset('img/adoption/'. $item->foto .'') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title crop-text-1">{{ $item->nama_peliharaan }}</h5>
                                    <p class="card-text crop-text-4 text-justify">{{ $item->ras }}</p>
                                    <div class="text-center">
                                        <a href="{{ url('adoptions/detail/'. $item->id .'') }}"
                                            class="btn btn-primary">Kunjungi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center">
                    {{ $kucings->appends(['anjings' => $anjings->currentPage()])->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
