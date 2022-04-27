@extends('layouts.main')
@section('container')
@php
use Illuminate\Support\Carbon;
    use App\Models\Kategori;
    use App\Models\Kategori2;
@endphp
    <div class="container mt-4">'
        <div class="row">

            <div class="col-12 py-3">
                <div class="text-start mt-2" style="border-left:4px solid #F87575;">
                    <h5 class="px-3">{{ $nama }}</h5>
                </div>
                <div class="text-start">
                    <a href="/blogs"><span class="badge rounded-pill bg-light text-dark">Semua</span></a>
                    @foreach($kategoris1 as $key)
                    @if ($key->nama == 'Anjing')
                        <a href="{{ '/blogs/filter/'.$key->nama.'' }}"><span class="badge rounded-pill" style="background-color:#0000FF;">{{ $key->nama }}</span></a>
                    @elseif($key->nama == 'Kucing')
                        <a href="{{ '/blogs/filter/'.$key->nama.'' }}"><span class="badge rounded-pill" style="background-color:#FF0000;">{{ $key->nama }}</span></a>
                    @endif
                    @endforeach
                    @foreach($kategoris2 as $key)
                    @if ($key->nama == 'Penyakit')
                        <a href="{{ '/blogs/filter/'.$key->nama.'' }}"><span class="badge rounded-pill" style="background-color:#FFDF00;">{{ $key->nama }}</span></a>
                    @elseif($key->nama == 'Perawatan')
                        <a href="{{ '/blogs/filter/'.$key->nama.'' }}"><span class="badge rounded-pill" style="background-color:#00FF00;">{{ $key->nama }}</span></a>
                    @elseif($key->nama == 'First Aid')
                        <a href="{{ '/blogs/filter/'.$key->nama.'' }}"><span class="badge rounded-pill" style="background-color:#FF69B4;">{{ $key->nama }}</span></a>
                    @endif
                    @endforeach
                </div>
                <div class="col-12 col-md-12 col-lg-12 mt-4">
                    @foreach($blogs as $key)
                    <a href="{{ '/blogs/'. $key->id .'' }}" class="text-decoration-none text-black">
                        <div class="card mb-3 text-start">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ asset('img/'.$key->foto.'') }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $key->judul }}</h5>
                                        <div class="card-text mb-1" style="font-size:12px;">
                                            <div style="text-align: left;">
                                                @if ($key->kategori1 == 1)
                                                        <span class="badge"
                                                            style="background-color:#0000FF;">{{ $kategori = Kategori::find($key->kategori1)->nama }}</span>
                                                    @elseif($key->kategori1 == 2)
                                                        <span class="badge"
                                                            style="background-color:#FF0000;">{{ $kategori = Kategori::find($key->kategori1)->nama }}</span>
                                                    @endif
                                                    @if ($key->kategori2 == 1)
                                                        <span class="badge"
                                                            style="background-color:#FFDF00;">{{ $kategori2 = Kategori2::find($key->kategori2)->nama }}</span>
                                                    @elseif($key->kategori2 == 2)
                                                        <span class="badge"
                                                            style="background-color:#00FF00;">{{ $kategori2 = Kategori2::find($key->kategori2)->nama }}</span>
                                                    @elseif($key->kategori2 == 3)
                                                        <span class="badge"
                                                            style="background-color:#FF69B4;">{{ $kategori2 = Kategori2::find($key->kategori2)->nama }}</span>
                                                    @endif
                                            </div>
                                        </div>
                                        <p class="card-text crop-text-4"> {{ $key->deskripsi }}</p>
                                            <img src="{{ asset('img/admin.png') }}" class="rounded-circle" width="5%">
                                            <small class="text-muted ms-1"> {{ $key->creator }}
                                                <b>&nbsp;.&nbsp;</b>
                                                {{ Carbon::parse($key->updated_at)->translatedFormat('l, d F Y H:m:s') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
