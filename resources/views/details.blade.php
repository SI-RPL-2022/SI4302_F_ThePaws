@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
    <div class="row mt-3">
        <div class="col-8">
            <div class="card-body text-start">
                <div class="mb-3 text-start">
                    <h1 class="text-start">PetHouse / details</h1>
                    <br>
                    <h1 class="text-start">Drh Yusuf Adi Nugroho (@bandungvet)</h1>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img class="img-title mx-auto d-block" src="img/mundo.png" alt="">
                    <div class="input-group" data-dashlane-rid="b4d8eb12a1392b29" data-form-type="">
                    </div>
                </div>

                <div class="container">
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
                                            <a href="#" class="btn btn-primary">Kunjungi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {!! $pethouses->links() !!}
                    </div>
                </div>
            </div>
            
            <div class="detail_point">
<table style="padding: 0px; border: none;word-break: break-word;">
<tbody>
<tr>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top; white-space:nowrap;"><b>Alamat</b></td>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top; text-align: center;"><b>:</b></td>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top;" itemprop="address">Jl. Cikaso No.88 B, Sukamaju, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40121, Indonesia</td>
</tr>
<tr>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top; white-space:nowrap;"><b>No. Telepone</b></td>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top; text-align: center; width: 15px;"><b>:</b></td>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top;">+62 813-3331-2189</td>
</tr>
<tr>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top; white-space:nowrap;"><b>Website</b></td>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top; text-align: center;"><b>:</b></td>
<td style="padding: 0px; border-bottom: none; vertical-align: text-top;">
<a href="https://drh-yusuf-adi-nugroho.business.site/" target="_blank" rel="noreferrer nofollow">https://drh-yusuf-adi-nugroho.business.site/</a>
</tr>
<tr>
<div> <b>Jam Operasional:</b>
</tr>
<span>Monday: 10:00 AM – 2:00 PM, 5:00 – 8:00 PM</span> <br>
<span>Tuesday: 10:00 AM – 2:00 PM, 5:00 – 8:00 PM</span> <br>
<span>Wednesday: 10:00 AM – 2:00 PM, 5:00 – 8:00 PM</span> <br>
<span>Thursday: 10:00 AM – 2:00 PM, 5:00 – 8:00 PM</span> <br>
<span>Friday: 10:00 AM – 2:00 PM, 5:00 – 8:00 PM</span> <br>
<span>Saturday: 10:00 AM – 3:00 PM</span> <br>
<span>Sunday: 10:00 AM – 3:00 PM</span>
</div>
</tbody>
</table>
</div>

        </div>
        <div class="col-4 mt">
            <div class="" style=" background-color:rgb(255,255,255);">
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                        <h5>Kategori</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        @foreach ($kategori1 as $key)
                        <a href="/blogs/filter/{{ $key->nama }}" class="text-decoration-none text-dark">
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
                                            <span class="badge rounded-pill" style="background-color:#0000FF;">{{ $blogs->where('kategori1', $key->id)->count() }}</span>
                                        @elseif($key->nama == 'Kucing')
                                            <span class="badge rounded-pill"
                                                style="background-color:#FF0000;">{{ $blogs->where('kategori1', $key->id)->count() }}</span>
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
                        <a href="/blogs/filter/{{ $key->nama }}" class="text-decoration-none text-dark">
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
                <div class="" style=" background-color:rgb(255,255,255);">
                    <div class="row justify-content-center">
                        <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                            <h5>Klinik Populer</h5>
                        </div>
                    </div>
                    @foreach ($populer->take(3) as $item)
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
                    @endforeach
                </div>
            </div>

        </div>
    </div>
    {{-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8392069406787!2d107.63045301477284!3d-6.909821595007257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e74ac4933575%3A0x3b32edfc71d1a0c0!2sDrh%20Yusuf%20Adi%20Nugroho!5e0!3m2!1sen!2sid!4v1652435055875!5m2!1sen!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
    @endsection
