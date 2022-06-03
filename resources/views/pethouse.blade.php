@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row mt-3">
        <div class="col-8">
            <div class="card-body text-start">
                <div class="mb-3 text-start">
                    <h1 class="text-start"> <a href="{{ route('pethouse.index') }}" class="text-black">PetHouse</a></h1>
                    <br>
                    <h2 class="text-start">Daftar Klinik Hewan Terbaru & Terlengkap</h2>
                    <p class="text-start">Informasi terkait praktik dokter, alamat, jam operasional, dan ulasan
                        klinik hewan
                        disekitarmu</p>
                    <form action="{{ '/pethouse/search/' }}" method="get">
                        <div class="input-group">
                            <input type="text" name="nama" class="form-control rounded" placeholder="Cari Nama Pethouse" aria-label="Search"
                                aria-describedby="search-addon"
                                @if(isset($history))
                                value="{{ $history }}"
                                @endif>
                            <button type="submit" class="btn btn-outline-primary">Cari</button>
                        </div>
                    </form>
                </div>

                <div class="container">
                    <div class="row">
                        @if (isset($pethouses))
                        @foreach($pethouses as $pethouse)
                            <div class="col-4 mb-3">
                                <div class="card h-100">
                                    <img src="{{ asset(''.$pethouse->foto.'') }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        @php
                                            $utuh = floor($pethouse->rating);
                                            $setengah = floor(round(($pethouse->rating *2) %2)) ;
                                        @endphp
                                        @for($i=0; $i<$utuh; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                        @if($setengah)
                                            <span class="fa fa-star-half-o"></span>
                                        @endif
                                        <span>{{ $pethouse->rating }}</span>
                                        <h5 class="card-title crop-text-1">{{ $pethouse->nama }}</h5>
                                        <p class="card-text crop-text-4 text-justify">{{ $pethouse->deskripsi }}</p>
                                        <div class="text-center">
                                            <a href="{{ '/pethouse/details/'. $pethouse->id .'' }}"
                                                class="btn btn-primary">Kunjungi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            {{  $pethouses->links()  }}
                        </div>
                        @else
                        <p class="text-center">Pencarian tidak ditemukan. <br> <a href="{{ route('pethouse.index') }}" class="text-black">Tampilkan semua Pethouse</a></p>
                        @endif
                    </div>
                </div>
            </div>  

        </div>
        <div class="col-4 mt">
            <div class  ="" style=" background-color:rgb(255,255,255);">
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                        <h5>Klinik Populer</h5>
                    </div>
                </div>
                @foreach($populer->take(3) as $item)
                    <div class="row g-0 mb-3 justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ asset(''.$item->foto.'') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="{{ '/pethouse/details/'.$item->id.'' }}" class="text-decoration-none text-dark">
                                    <div class="row">
                                        <div class="col col-5">
                                            <h6 class="card-title text-start">{{ $item->nama }}</h6>
                                        </div>
                                        <div class="col col-7">
                                            @php
                                                $utuh = floor($item->rating);
                                                $setengah = floor(round(($item->rating *2) %2)) ;
                                            @endphp
                                            @for($i=0; $i<$utuh; $i++)
                                                <span class="fa fa-star checked"></span>
                                            @endfor
                                            @if($setengah)
                                                <span class="fa fa-star-half-o"></span>
                                            @endif
                                            <span>{{ $item->rating }}</span>
                                        </div>
                                    </div>
                                    <p class="text-start">{{ $item->alamat }}</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
@endsection
