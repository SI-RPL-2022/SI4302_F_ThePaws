@extends("layouts.main")
@section('container')
<img src="img/abooutus.png" alt="" class="img-aboutus">
<div class="container container-aboutus px-3">
    <div class="row">
        <div class="col col-md-4 text-start py-0">
            <h1>Tentang The Paws </h1>
            <img src="img/garis.png" alt="" class="img mx-5 d-block">
        </div>
        <div class="col col-md-8">
        </div>
    </div>
    <div class="row my-3">
        <div class="col text-start">
            <p align="justify">{{ $data->text }}</p>
        </div>
    </div>
</div>
@endsection