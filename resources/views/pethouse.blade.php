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
                        <h2 class="text-start">Daftar Klinik Hewan Terbaru & Terlengkap</h2>
                        <p class="text-start">Informasi terkait praktik dokter, alamat, jam operasional, dan ulasan
                            klinik hewan
                            disekitarmu</p>
                        <div class="input-group" data-dashlane-rid="b4d8eb12a1392b29" data-form-type="">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" data-dashlane-rid="ff0ffa2f8d970368" data-form-type="">
                            <button type="button" class="btn btn-outline-primary" data-dashlane-rid="43c4d609f90379c9"
                                data-form-type="" data-dashlane-label="true">search</button>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="img/pethouse/amir.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star-half-o"></span>
                                        <h5 class="card-title">drh. Amir Candra</h5>
                                        <p class="card-text">drh. Amir Candra Dokter Hewan in Bandung melayani proses
                                            kelahiran
                                            sectio caesarea, vaksinasi, diagnosa dengan USG, test kesuburan, dan pengobatan.
                                        </p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary">Kunjungi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="img/pethouse/Myttens.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <h5 class="card-title">Myttens Pet Care</h5>
                                        <p class="card-text">Myttens Pet Care merupakan klinik hewan yang dikelola oleh
                                            drh. Anton.
                                            Myttens menyediakan pelayanan berupa vet, petshop, grooming, dan hotel.</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary">Kunjungi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="img/pethouse/anton.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <h5 class="card-title">drh. Anton dan drh. Yesi</h5>
                                        <p class="card-text">Praktik dokter hewan bersama yang dikelola oleh drh. Anton
                                            dan drh.
                                            Yesi telah terhubung dengan pdhb yaitu pelopor dalam layanan darurat veteriner
                                            24 jam.</p>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary">Kunjungi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#" class="btn btn-primary">Selanjutnya</a>
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
                            <div class="row">
                                <div class="col-6">
                                    <div class=" fs-6">
                                        Kucing
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class=" fs-6">
                                        <span class="badge rounded-pill" style="background-color:#FF0000;">5</span>
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

                            <div class="row">
                                <div class="col-6">
                                    <div class=" fs-6">
                                        Penyakit
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class=" fs-6">
                                        <span class="badge rounded-pill" style="background-color:#FFDF00;">3</span>
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
                            <div class="row">
                                <div class="col-6">
                                    <div class=" fs-6">
                                        Perawatan
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class=" fs-6">
                                        <span class="badge rounded-pill" style="background-color:#00FF00;">3</span>
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
                            <div class="row">
                                <div class="col-6">
                                    <div class=" fs-6">
                                        First Aid
                                    </div>
                                </div>
                                <div class="col-1"></div>
                                <div class="col-5">
                                    <div class=" fs-6">
                                        <span class="badge rounded-pill" style="background-color:#FF69B4;">2</span>
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
                    <div class="" style=" background-color:rgb(255,255,255);">
                        <div class="row justify-content-center">
                            <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                                <h5>Klinik Populer</h5>
                            </div>
                        </div>
                        <div class="row g-0 mb-3 justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/pethouse/amir.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <a href="#" class="text-decoration-none text-dark">
                                            <h6 class="card-title text-start">drh. Amir Candra &nbsp; &nbsp; &nbsp; &nbsp;
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star-half-o"></span>
                                            </h6>
                                            <p class="text-start"> Antapani, Bandung. </p>
                                        </a>
                                        <p class="mb-1 text-start" style="font-size:12px;">
                                        </p>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mb-3 justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/pethouse/myttens.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h6 class="card-title text-start">Myttens Pet Care &nbsp; &nbsp; &nbsp; &nbsp;
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-half-o"></span>
                                        </h6>
                                        <p class="text-start"> Antapani, Bandung. </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mb-3 justify-content-center">
                            <div class="card" style="width: 18rem;">
                                <img src="img/pethouse/anton.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none text-dark">
                                        <h6 class="card-title text-start">drh. Anton & drh. Yesi &nbsp;
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star-half-o"></span>
                                        </h6>
                                        <p class="text-start"> Antapani, Bandung. </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endsection
