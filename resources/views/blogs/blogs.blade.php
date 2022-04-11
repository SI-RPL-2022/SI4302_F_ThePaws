@extends('layouts.main')
@section('container')


<div class="container mt-4">'
    <div class="row">

        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon"/>
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>

        <div class="col-12 col-md-12 col-lg-9">

            <div class="card mb-3 mt-3">
                <div class="card-body">
                    <div class="col-4 col-lg-2 text-center mt-2" style="border-left:4px solid #F87575;">
                        <h5>Berita Terkini</h5>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12 mt-4">

                        <div class="row g-0 mb-4">
                            <div class="col-4">
                                <img src="img/blog4.png" style="border-radius: 10px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="align-items-start ms-3">
                                    <h5 style="text-align: left;">Penyebab Dan Cara Mengobati Kucing Jika Muntah</h5>
                                    <div class="card-text mb-1"style="font-size:12px;">
                                        <div style="text-align: left;">
                                            <span class="badge" style="background-color: #FF0000;">Kucing</span>
                                            <span class="badge" style="background-color: #FFDF00;">Penyakit</span>
                                            <span class="badge" style="background-color: #00FF00;">Perawatan</span>
                                        </div>
                                    </div>

                                    <div class="card-text mb-2" style="font-size:13px; text-align: justify">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                        felis erat, at accumsan libero bibendum eu. Sed posuere tincidunt commodo. Mauris luctus augue ut vehicula fermentum.
                                    </div>

                                    <div class="card-text" style="text-align: left;">
                                        <img src="img/admin.png" class="rounded-circle" width="5%">
                                        <small class="text-muted ms-1" style="font-size:12px;">Admin - 1 April 2022 </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0 mb-4">
                            <div class="col-4">
                                <img src="img/blog5.png" style="border-radius: 10px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="align-items-start ms-3">
                                    <h5 style="text-align: left;">Penyebab Dan Cara Mengobati Anjing Jika Muntah</h5>
                                    <div class="card-text mb-1"style="font-size:12px;">
                                        <div style="text-align: left;">
                                            <span class="badge" style="background-color: #0000FF;">Anjing</span>
                                            <span class="badge" style="background-color: #FFDF00;">Penyakit</span>
                                            <span class="badge" style="background-color: #00FF00;">Perawatan</span>
                                        </div>
                                    </div>

                                    <div class="card-text mb-2" style="font-size:13px; text-align: justify">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                        felis erat, at accumsan libero bibendum eu. Sed posuere tincidunt commodo. Mauris luctus augue ut vehicula fermentum.
                                    </div>

                                    <div class="card-text" style="text-align: left;">
                                        <img src="img/admin.png" class="rounded-circle" width="5%">
                                        <small class="text-muted ms-1" style="font-size:12px;">Admin - 2 April 2022 </small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-0 mb-4">
                            <div class="col-4">
                                <img src="img/blog3.png" style="border-radius: 10px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-8">
                                <div class="align-items-start ms-3">
                                    <h5 style="text-align: left;">Pertolongan Pertama Jika Kucing Mengalami Cedera Usai Melahirkan</h5>
                                    <div class="card-text mb-1"style="font-size:12px;">
                                        <div style="text-align: left;">
                                            <span class="badge" style="background-color: #FF0000;">Kucing</span>
                                            <span class="badge" style="background-color: #00FF00;">Pertolongan Pertama</span>
                                            <span class="badge" style="background-color: #00FF00;">Perawatan</span>
                                        </div>
                                    </div>

                                    <div class="card-text mb-2" style="font-size:13px; text-align: justify">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius
                                        felis erat, at accumsan libero bibendum eu. Sed posuere tincidunt commodo. Mauris luctus augue ut vehicula fermentum.
                                    </div>

                                    <div class="card-text" style="text-align: left;">
                                        <img src="img/admin.png" class="rounded-circle" width="5%">
                                        <small class="text-muted ms-1" style="font-size:12px;">Admin - 3 April 2022 </small>
                                    </div>
                                </div>
                            </div>
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
                                <h5><b>Informasi Penyakit</b></h5>
                            </div>

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog4.png" class="card-img-top" alt="penyakit1">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Penyebab Dan Cara Mengobati Kucing Jika Muntah</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <button href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog4.png" class="card-img-top" alt="penyakit2">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Penyebab Dan Cara Mengobati Kucing Jika Muntah</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog4.png" class="card-img-top" alt="penyakit3">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Penyebab Dan Cara Mengobati Kucing Jika Muntah</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
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

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog3.png" class="card-img-top" alt="aid1">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Pertolongan Pertama Jika Kucing Mengalami Cedera Usai Melahirkan</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog3.png" class="card-img-top" alt="aid2">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Pertolongan Pertama Jika Kucing Mengalami Cedera Usai Melahirkan</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog3.png" class="card-img-top" alt="aid3">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Pertolongan Pertama Jika Kucing Mengalami Cedera Usai Melahirkan</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
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
                                <h5><b>Informasi Perawatan</b></h5>
                            </div>

                            <div class="row row-cols-1 row-cols-md-3 g-4">
                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog1.png" class="card-img-top" alt="rawat1">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Cara Merawat Anak Anjing Tanpa Induk</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog1.png" class="card-img-top" alt="rawat2">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Cara Merawat Anak Anjing Tanpa Induk</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card">
                                        <img src="img/blog1.png" class="card-img-top" alt="rawat3">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align: left">Cara Merawat Anak Anjing Tanpa Induk</h5>
                                            <p class="card-text" style="text-align: left">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                                            <a href="#" class="btn btn-primary" style="border-radius: 20px">Read more &nbsp<i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
</div>

@endsection
