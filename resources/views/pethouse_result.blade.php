@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row mt-3">
        <div class="col-8">
            <div class="card-body text-start">
                <div class="mb-3 text-start">
                    <h1 class="text-start">PetHouse</h1>
                    <br>
                    @php
                    dd($pethouses);
                    @endphp
                    <h2 class="text-start">Daftar Klinik Hewan Terbaru & Terlengkap</h2>
                    <p class="text-start">Informasi terkait praktik dokter, alamat, jam operasional, dan ulasan
                        klinik hewan
                        disekitarmu</p>
                    <form action="{{ '/pethouse/search/' }}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="search" class="form-control rounded" placeholder="Cari Nama Pethouse" aria-label="Search"
                                aria-describedby="search-addon">
                            <button type="button" class="btn btn-outline-primary">Cari</button>
                        </div>
                    </form>
                </div>

                {{-- <div class="container">
                    <div class="row">
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
                    </div>
                </div> --}}
            </div>  

        </div>
        <div class="col-4 mt">
            <div class  ="" style=" background-color:rgb(255,255,255);">
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                        <h5>Klinik Populer</h5>
                    </div>
                </div>
                {{-- @foreach($populer->take(3) as $item)
                    <div class="row g-0 mb-3 justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $item->foto }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="#" class="text-decoration-none text-dark">
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
                @endforeach --}}
            </div>
        </div>

    </div>
</div>
{{-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8392069406787!2d107.63045301477284!3d-6.909821595007257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e74ac4933575%3A0x3b32edfc71d1a0c0!2sDrh%20Yusuf%20Adi%20Nugroho!5e0!3m2!1sen!2sid!4v1652435055875!5m2!1sen!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
@endsection
