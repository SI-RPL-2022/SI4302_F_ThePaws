@extends('layouts.main')
@section('container')
    @php
    use Illuminate\Support\Carbon;
    use App\Models\Kategori;
    use App\Models\Kategori2;
    @endphp
    <div class="container mt-4">'
        <div class="row">

            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-primary">search</button>
            </div>

            <div class="col-8 col-md-8 py-3">
                <div class="col-4 col-lg-2 text-center mt-2" style="border-left:4px solid #F87575;">
                    <h5>Berita Terkini</h5>
                </div>
                <div class="col-12 col-md-12 col-lg-12 mt-4">

                    @foreach ($blogs->take(3) as $blog)
                        <a href="{{ '/blogs/'.$blog->id.''}}" class="text-decoration-none text-black">
                            <div class="card mb-3 text-start">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ asset('img/' . $blog->foto . '') }}" class="img-fluid rounded-start"
                                            alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $blog->judul }}</h5>
                                            <div class="card-text mb-1" style="font-size:12px;">
                                                <div style="text-align: left;">
                                                    @if ($blog->kategori1 == 1)
                                                        <span class="badge"
                                                            style="background-color:#0000FF;">{{ $kategori = Kategori::find($blog->kategori1)->nama }}</span>
                                                    @elseif($blog->kategori1 == 2)
                                                        <span class="badge"
                                                            style="background-color:#FF0000;">{{ $kategori = Kategori::find($blog->kategori1)->nama }}</span>
                                                    @endif
                                                    @if ($blog->kategori2 == 1)
                                                        <span class="badge"
                                                            style="background-color:#FFDF00;">{{ $kategori2 = Kategori2::find($blog->kategori2)->nama }}</span>
                                                    @elseif($blog->kategori2 == 2)
                                                        <span class="badge"
                                                            style="background-color:#00FF00;">{{ $kategori2 = Kategori2::find($blog->kategori2)->nama }}</span>
                                                    @elseif($blog->kategori2 == 3)
                                                        <span class="badge"
                                                            style="background-color:#FF69B4;">{{ $kategori2 = Kategori2::find($blog->kategori2)->nama }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <p class="card-text crop-text-4"> {{ $blog->deskripsi }}</p>
                                            <img src="img/admin.png" class="rounded-circle" width="5%">
                                            <small class="text-muted ms-1"> {{ $blog->creator }}
                                                <b>&nbsp;.&nbsp;</b>
                                                {{ Carbon::parse($blog->updated_at)->translatedFormat('l, d F Y H:m:s') }}</small>
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
                                                <span class="badge rounded-pill"
                                                    style="background-color:#0000FF;">{{ $blogs->where('kategori1', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'Kucing')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FF0000;">{{ $blogs->where('kategori1', $key->id)->count() }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <hr style="color:#F87575;">
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($kategoris as $key)
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" fs-6">
                                            {{ $key->nama }}
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5">
                                        <div class=" fs-6">
                                            @if ($key->nama == 'Penyakit')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FFDF00;">{{ $blogs->where('kategori2', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'Perawatan')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#00FF00;">{{ $blogs->where('kategori2', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'First Aid')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FF69B4;">{{ $blogs->where('kategori2', $key->id)->count() }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
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
                        <div class="col-3 text-center mt-2" style="border-bottom:4px solid #F87575;">
                            <h5><b>Informasi Penyakit</b></h5>
                        </div>

                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                            @php
                                $a = 0;
                            @endphp
                            @foreach ($blogs as $blog)
                                @if ($blog->kategori2 == 1 && $a != 3)
                                    <div class="col">
                                        <div class="card h-100 bg-paws-blue">
                                            <img src="{{ asset('img/' . $blog->foto . '') }}"
                                                class="card-img-top blogs-img" alt="penyakit1">
                                            <div class="card-body">
                                                <h5 class="card-title crop-text-1" style="text-align: left">
                                                    {{ $blog->judul }}
                                                </h5>
                                                <p class="card-text crop-text-4 text-justify">
                                                    {{ $blog->deskripsi }}</p>
                                                <a href="{{ '/blogs/'.$blog->id.''}}" class="btn btn-primary"
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
                        <div class="col-3 text-center mt-2" style="border-bottom:4px solid #F87575;">
                            <h5><b>Informasi Perawatan</b></h5>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                            @php
                                $b = 0;
                            @endphp
                            @foreach ($blogs as $blog)
                                @if ($blog->kategori2 == 2 && $b != 3)
                                    <div class="col">
                                        <div class="card h-100 bg-paws-blue">
                                            <img src="{{ asset('img/' . $blog->foto . '') }}"
                                                class="card-img-top blogs-img" alt="aid1">
                                            <div class="card-body">
                                                <h5 class="card-title crop-text-1" style="text-align: left">
                                                    {{ $blog->judul }}
                                                </h5>
                                                <p class="card-text crop-text-4 text-justify">
                                                    {{ $blog->deskripsi }}</p>
                                                <a href="{{ '/blogs/' . $blog->id . '' }}" class="btn btn-primary"
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
                        <div class="col-3 text-center mt-2" style="border-bottom:4px solid #F87575;">
                            <h5><b>Informasi Pertolongan Pertama</b></h5>
                        </div>

                        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                            @php
                                $c = 0;
                            @endphp
                            @foreach ($blogs as $blog)
                                @if ($blog->kategori2 == 3 && $c != 3)
                                    <div class="col">
                                        <div class="card h-100  bg-paws-blue">
                                            <img src="{{ asset('img/' . $blog->foto . '') }}" class="card-img-top"
                                                alt="rawat1">
                                            <div class="card-body">
                                                <h5 class="card-title crop-text-1" style="text-align: left">
                                                    {{ $blog->judul }}</h5>
                                                <p class="card-text text-justify crop-text-4">{{ $blog->deskripsi }}
                                                </p>
                                                <a href="{{ '/blogs/' . $blog->id . '' }}" class="btn btn-primary" style="border-radius: 20px">Read
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
