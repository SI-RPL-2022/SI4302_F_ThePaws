@extends('layouts.main')
@section('container')
<div class="container container-title text-start">
    <div class="row align-items-center">
        <div class="col py-3">
            <div class="brand-title">
                <h1 class="text-break text-pangolin">Taking Care <br> For Your Pet</h1>
                <p class="text-roboto">Keep the bonding between human and pets</p>
            </div>
            <a class="btn btn-primary text-white paws-blue-btn text-center explore-more-button" href="#">Explore More >
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
                        <div class="card">
                            <img class="img-fluid" alt="100%x280" src="img/Blogs.jpg">
                            <div class="card-body">
                                <h4 class="card-title">Blogs</h4>
                                <p class="card-text">Dapatkan informasi terlengkap untuk hewan peliharaan kesayanganmu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img class="img-fluid" alt="100%x280" src="img/vet.jpg">
                            <div class="card-body">
                                <h4 class="card-title">PetHouse</h4>
                                <p class="card-text">Dapatkan informasi mengenai klinik hewan terdekat beserta detailnya</p>
                            </div>
                        </div>
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
                                <p class="card-text">Ingin peliharaan baru? Coba cek informasi hewan siap adopsi disini</p>
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
    <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="img-fluid" alt="100%x280" src="img/blog1.png">
                            <div class="card-body">
                                <h4 class="card-title">Cara Merawat Anak Anjing Tanpa Induk</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="img-fluid" alt="100%x280" src="img/blog2.png">
                            <div class="card-body">
                                <h4 class="card-title">Manfaat Vaksin Untuk Kucing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="img-fluid" alt="100%x280" src="img/blog3.png">
                            <div class="card-body">
                                <h4 class="card-title">Pertolongan Pertama Jika Kucing Mengalami Cedera Usai Melahirkan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="img-fluid" alt="100%x280" src="img/blog4.png">
                            <div class="card-body">
                                <h4 class="card-title">Penyebab Dan Cara Mengobati Kucing Jika Muntah</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="img-fluid" alt="100%x280" src="img/blog5.png">
                            <div class="card-body">
                                <h4 class="card-title">Penyebab Dan Cara Mengobati Anjing Jika Muntah</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100">
                            <img class="img-fluid" alt="100%x280" src="img/blog6.png">
                            <div class="card-body">
                                <h4 class="card-title">Rekomendasi Tempat Untuk Mengajak Anjing Jalan-Jalan</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon shadow rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
            <span class="carousel-control-next-icon shadow rounded" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection