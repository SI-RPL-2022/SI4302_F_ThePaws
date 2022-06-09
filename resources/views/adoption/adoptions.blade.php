@extends('layouts.main')
@section('container')
@php
    use Illuminate\Support\Carbon;
    use App\Models\Adoption;
    @endphp
    <div class="container mt-4">'
        <div class="row">
            <div class="col-8 col-md-8 py-3">
                <div class="col-4 col-lg-2 text-center mt-2" style="border-bottom:4px solid #F87575;">
                    <h5>Adoption</h5>
                </div>
                <div class="col-12 col-md-12 col-lg-12 mt-4">

                    @foreach ($adoptions->take(3) as $adoption)
                        <a href="{{ '/adoptions/'.$adoption->id.''}}" class="text-decoration-none text-black">
                            <div class="card mb-3 text-start">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/' . $adoption->foto . '') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $adoption->nama }}</h5>
                                            <div class="card-text mb-1" style="font-size:12px;">
                                                <div style="text-align: left;">
                                                    @if ($adoption->kategori1 == 1)
                                                        <span class="badge"
                                                            style="background-color:#0000FF;">{{ $kategori = Kategori::find($adoption->kategori1)->nama }}</span>
                                                    @elseif($adoption->kategori1 == 2)
                                                        <span class="badge"
                                                            style="background-color:#FF0000;">{{ $kategori = Kategori::find($adoption->kategori1)->nama }}</span>
                                                    @endif
                                                    @if ($adoption->kategori2 == 1)
                                                        <span class="badge"
                                                            style="background-color:#FFDF00;">{{ $kategori2 = Kategori2::find($adoption->kategori2)->nama }}</span>
                                                    @elseif($adoption->kategori2 == 2)
                                                        <span class="badge"
                                                            style="background-color:#00FF00;">{{ $kategori2 = Kategori2::find($adoption->kategori2)->nama }}</span>
                                                    @elseif($adoption->kategori2 == 3)
                                                        <span class="badge"
                                                            style="background-color:#FF69B4;">{{ $kategori2 = Kategori2::find($adoption->kategori2)->nama }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <p class="card-text crop-text-4"> {{ $adoption->ras }}</p>
                                            <!-- <img src="img/admin.png" class="rounded-circle" width="5%"> -->
                                            <!-- <small class="text-muted ms-1"> {{ $adoption->creator }}
                                                <b>&nbsp;.&nbsp;</b>
                                                {{ Carbon::parse($adoption->updated_at)->translatedFormat('l, d F Y H:m:s') }}</small> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col-4 mt-3">
                <div class="" style=" background-color:rgb(255,255,255);">
                    <div class="row justify-content-center">
                        <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                            <h5>Kategori</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            @foreach ($kategori1 as $key)
                            <a href="/adoptions/filter/{{ $key->nama }}" class="text-decoration-none text-dark">
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" fs-6">
                                            {{ $key->nama }}
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5">
                                        <div class=" fs-6">
                                            @if ($key->nama == 'Anjing')
                                                <span class="badge rounded-pill" style="background-color:#0000FF;">{{ $adoptions->where('kategori1', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'Kucing')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FF0000;">{{ $adoptions->where('kategori1', $key->id)->count() }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </a>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <hr style="color:#F87575;">
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($kategoris as $key)
                            <a href="/adoptions/filter/{{ $key->nama }}" class="text-decoration-none text-dark">
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" fs-6">
                                            {{ $key->nama }}
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5">
                                        <!-- <div class=" fs-6">
                                            @if ($key->nama == 'Penyakit')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FFDF00;">{{ $adoptions->where('kategori2', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'Perawatan')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#00FF00;">{{ $adoptions->where('kategori2', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'First Aid')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FF69B4;">{{ $adoptions->where('kategori2', $key->id)->count() }}</span>
                                            @endif
                                        </div> -->
                                    </div>
                                </div>
                            </a>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <hr style="color:#F87575;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <!-- <div class="col-3 text-center mt-2" style="border-bottom:4px solid #F87575;">
                            <h5><b>Informasi Penyakit</b></h5>
                        </div> -->

                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                            @php
                                $a = 0;
                            @endphp
                            @foreach ($adoptions as $adoption)
                                @if ($adoption->kategori2 == 1 && $a != 3)
                                    <div class="col">
                                        <div class="card h-100 bg-paws-blue">
                                            <img src="{{ asset('img/' . $adoption->foto . '') }}"
                                                class="card-img-top adoptions-img" alt="penyakit1">
                                            <div class="card-body">
                                                <h5 class="card-title crop-text-1" style="text-align: left">
                                                    {{ $adoption->judul }}
                                                </h5>
                                                <p class="card-text crop-text-4 text-justify">
                                                    {{ $adoption->ras }}</p>
                                                <a href="{{ '/adoptions/'.$adoption->id.''}}" class="btn btn-primary"
                                                    style="border-radius: 20px">Read
                                                    more &nbsp<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $a++;
                                    @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <!-- <div class="col-3 text-center mt-2" style="border-bottom:4px solid #F87575;">
                            <h5><b>Informasi Perawatan</b></h5>
                        </div> -->
                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                            @php
                                $b = 0;
                            @endphp
                            @foreach ($adoptions as $adoption)
                                @if ($adoption->kategori2 == 2 && $b != 3)
                                    <div class="col">
                                        <div class="card h-100 bg-paws-blue">
                                            <img src="{{ asset('img/' . $adoption->foto . '') }}"
                                                class="card-img-top adoptions-img" alt="aid1">
                                            <div class="card-body">
                                                <h5 class="card-title crop-text-1" style="text-align: left">
                                                    {{ $adoption->nama }}
                                                </h5>
                                                <p class="card-text crop-text-4 text-justify">
                                                    {{ $adoption->ras }}</p>
                                                <a href="{{ '/adoptions/' . $adoption->id . '' }}" class="btn btn-primary"
                                                    style="border-radius: 20px">Read
                                                    more &nbsp<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $b++;
                                    @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-12 col-lg-12">
            <div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <!-- <div class="col-3 text-center mt-2" style="border-bottom:4px solid #F87575;">
                            <h5><b>Informasi Pertolongan Pertama</b></h5>
                        </div> -->

                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                            @php
                                $c = 0;
                            @endphp
                            @foreach ($adoptions as $adoption)
                                @if ($adoption->kategori2 == 3 && $c != 3)
                                    <div class="col">
                                        <div class="card h-100  bg-paws-blue">
                                            <img src="{{ asset('img/' . $adoption->foto . '') }}" class="card-img-top"
                                                alt="rawat1">
                                            <div class="card-body">
                                                <h5 class="card-title crop-text-1" style="text-align: left">
                                                    {{ $adoption->nama }}</h5>
                                                <p class="card-text text-justify crop-text-4">{{ $adoption->ras }}
                                                </p>
                                                <a href="{{ '/adoptions/' . $adoption->id . '' }}" class="btn btn-primary" style="border-radius: 20px">Read
                                                    more &nbsp<i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $c++;
                                    @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection