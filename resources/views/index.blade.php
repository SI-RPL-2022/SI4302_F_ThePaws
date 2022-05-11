@extends('layouts.main')
@section('container')
<div class="container container-title text-start">
    <div class="row align-items-center">
        <div class="col py-3">
            <div class="brand-title">
                <h1 class="text-break text-pangolin">Taking Care <br> For Your Pet</h1>
                <p class="text-roboto">Keep the bonding between human and pets</p>
            </div>
            <a class="btn btn-primary text-white paws-blue-btn text-center explore-more-button" href="/blogs">Explore More >
            </a>
        </div>
        <div class="col">
            <img class="img-title mx-auto d-block" src="img/thepaws.png" alt="">
        </div>
    </div>
</div>
<div class="container container-services">
    <h6>- What We Offer -</h6>
    <h3>OUR SERVICES</h3>
    <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <a href="/blogs" class="text-decoration-none text-black">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" src="img/Blogs.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">Blogs</h4>
                                    <p class="card-text">Dapatkan informasi terlengkap untuk hewan peliharaan kesayanganmu
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="/pethouse" class="text-decoration-none text-black">
                            <div class="card">
                                <img class="img-fluid" alt="100%x280" src="img/vet.jpg">
                                <div class="card-body">
                                    <h4 class="card-title">PetHouse</h4>
                                    <p class="card-text">Dapatkan informasi mengenai klinik hewan terdekat beserta detailnya
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="img-fluid" alt="100%x280" src="img/CaRecommend.png">
                            <div class="card-body">
                                <h4 class="card-title">CaRecommend</h4>
                                <p class="card-text">Ayo cek makanan yang cocok untuk peliharaan kesayanganmu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row justify-content-center">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="img-fluid" alt="100%x280" src="img/Adoption.jpg">
                            <div class="card-body">
                                <h4 class="card-title">Adoption</h4>
                                <p class="card-text">Ingin peliharaan baru? Coba cek informasi hewan siap adopsi disini
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="img-fluid" alt="100%x280" src="img/PetCessories.jpg">
                            <div class="card-body">
                                <h4 class="card-title">PetCessories</h4>
                                <p class="card-text">Buatlah peliharaan anda selalu senang dengan memanjakannya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon shadow rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
            <span class="carousel-control-next-icon shadow rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container container-blog">
    <h6>- Keep Updated -</h6>
    <h3>LATEST BLOG POSTS</h3>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach($blogs->take(1) as $key)
            {{$a = $key->id}}
            <div class="carousel-item active">
                <img src="{{ asset('img/'.$key->foto.'') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ '/blogs/'.$key->id.'' }}" class="text-decoration-none text-white">
                        <h5>{{ $key->judul }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
            @foreach($blogs->take(3) as $key)
            @if($key->id != $a)
            <div class="carousel-item">
                <img src="{{ asset('img/'.$key->foto.'') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ '/blogs/'.$key->id.'' }}" class="text-decoration-none text-white">
                        <h5>{{ $key->judul }}</h5>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection