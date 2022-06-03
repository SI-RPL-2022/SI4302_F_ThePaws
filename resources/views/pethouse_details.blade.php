@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-7 ">
            <div class="card-body text-start">
                <div class="mb-3 text-start">
                    <h1 class="text-start"><a href="{{ url('/pethouse') }}"
                            class="text-black">Pethouse</a><span> / {{ $pethouse->nama }}</span></h1>
                </div>
                <img src="{{ asset(''.$pethouse->foto.'') }}"
                    class="card img-top img-fluid my-3 mx-auto rounded" width="500px">
                <div align="justify" style="font-size:15px;">
                    <div class="col-12 px-3 py-2" style="border-left:4px solid #F87575; ">
                        <p>{{ $pethouse->deskripsi }}</p>
                    </div>

                    <table class="table" style="margin-top: 3%">
                        <tbody>
                            <tr class="align-middle">
                                <td><strong>Alamat</strong></td>
                                <td>{{ $pethouse->alamat }}</td>
                            </tr>
                            <tr class="align-middle">
                                <td><strong>No. Telepon</strong></td>
                                <td><a rel="nofollow noopener noreferrer" target="_blank"
                                        href="tel:{{ $pethouse->no_telepon }}"
                                        title="">{{ $pethouse->no_telepon }}</a></td>
                            </tr>
                            <tr class="align-middle">
                                <td><strong>Website</strong></td>
                                <td><a rel="nofollow noopener noreferrer" target="_blank"
                                        href="{{ $pethouse->website }}" title="">{{ $pethouse->website }}</a>
                                </td>
                            </tr>
                            <tr class="align-middle">
                                <td><strong>Jam Operasional</strong></td>
                                <td>
                                    @foreach($workinghours as $w)
                                        <div class="row">
                                            @if($w->day == 1)
                                                <div class="col col-2">Senin</div>
                                            @elseif($w->day == 2)
                                                <div class="col col-2">Selasa</div>
                                            @elseif($w->day == 3)
                                                <div class="col col-2">Rabu</div>
                                            @elseif($w->day == 4)
                                                <div class="col col-2">Kamis</div>
                                            @elseif($w->day == 5)
                                                <div class="col col-2">Jumat</div>
                                            @elseif($w->day == 6)
                                                <div class="col col-2">Sabtu</div>
                                            @elseif($w->day == 7)
                                                <div class="col col-2">Minggu</div>
                                            @endif
                                            <div class="col col-1">:</div>
                                            <div class="col col-9">
                                                {{ ''.$w->open.' - '.$w->close.'' }}
                                            </div>
                                        </div>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <form action="#" method="#" data-dashlane-rid="e4f9a74da2b670ef" data-form-type="">

                </form>

                <iframe src="{{ $pethouse->maps }}" width="100%" height="350rem" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


            </div>
        </div>

        <div class="col-1"></div>
        <div class="col-4 mt-3">
            <div class="" style=" background-color:rgb(255,255,255);">
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
@endsection
