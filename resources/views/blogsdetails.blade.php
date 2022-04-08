@extends("layouts.main")
@section('container')
<div class="container">
    <div class="row mt-3">
        <div class="col-7 ">
            <div class="card-body text-start">
                <div class="mb-3 text-start">
                    <h1 class="text-start">Blogs</h1>
                    <br>
                    <h2 class="text-start">{{$blog -> judul}}</h2>
                    <div class="card-text mb-1 text-start" style="font-size:15px;">
                        <span class="badge bg-danger ">{{$blog -> kategori2 -> nama}}</span>
                    </div>
                    <img src="img/admin.jpg" alt="" width="40" height="40" class="rounded-circle me-1"><small class="text-muted"> {{$blog -> creator}} <b>&nbsp;.&nbsp;</b> {{$blog -> created_at}}</small>
                </div>
                <img src="img/muntah.jpg" class="card img-top rounded" width="720px">
                <div align="justify" style="font-size:15px;">
                    <p class="mt-3">{{$blog -> deskripsi}}</p> 
                </div>
            </div>
        </div>
        <div class="col-1"></div>
        <div class="col-4 mt-3">
            <div class="" style=" background-color:rgb(255,255,255);">
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                        <h5>Kategori</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class=" fs-6">
                                    Anjing
                                </div>
                            </div>
                            <div class="col-1"></div>
                            <div class="col-5">
                                <div class=" fs-6">
                                    <span class="badge rounded-pill" style="background-color:#0000FF;">3</span>
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
                    </div>
                </div>
            </div>
            <div class="" style=" background-color:rgb(255,255,255);">
                <div class="row justify-content-center">
                    <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                        <h5>Other Article</h5>
                    </div>
                </div>
                @foreach($blogs as $key)
                <div class="row g-0 mb-3">

                    <div class="col-12">
                        <img src="{{asset('img/'.$key->foto.'')}}" width="320px" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-11">
                        <div class="align-items-start ms-5">
                            <h4 class="mt-3 mb-1 text-start" style="font-size:14px;"><a href="" style="color:#000000" class="text-decoration-none">{{$key -> judul}}</a></h4>
                            <p class="mb-1 text-start" style="font-size:12px;">
                                <span class="badge bg-primary text-start">{{$key -> kategori2}}</span>
                                <span class="badge text-start" style="background-color:#FF69B4;">Perawatan</span>

                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection