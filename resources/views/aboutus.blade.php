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
            <p align="justify">ThePaws dibentuk pada tahun 2022 oleh mahasiswa Telkom University S1 Sistem Informasi. The Paws yang dapat membantu kamu menemukan berbagai informasi untuk hewan peliharaan tersayang.
                Tujuan dari pembuatan aplikasi ini adalah untuk mengedukasi masyarakat umum, terutama pemilik hewan khususnya anjing, dan kucing untuk mengetahui bagaimana cara memberikan pertolongan pertama ketika peliharaannya terjatuh sakit. Adapun services yang kami berikan adalah Blogs, PetHouse, CaRecommend, Adoption, dan PetCessories. Informasi yang diberikan dalam aplikasi harapannya dapat meningkatkan pengetahuan masyarakat tentang bagaimana cara memberikan pertolongan pertama pada hewan khususnya anjing, dan kucing saat sakit, dan juga bagaimana cara merawat hewan yang baik. </p>
        </div>
    </div>

    <h1 class="text-start">Kami butuh Feedback kalian! </h1>
    <form action="" class="text-start">
        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                    <input type="form-control" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat E-mail</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button class="btn paws-peach-btn">Send Message</button>
    </form>
</div>
@endsection