@extends("layouts.main")
@section('container')

<div class="container mt-4">'
    <div class="row">
        <div class="col-5">
            <div class="card-body text-start">
                <div class="mb-3 text-start">
                    <h1 class="text-start">CaRecommend</h1>
                    <p class="text-start" style="font-size:20px" >CaRecommend merupakah fitur yang ada di website The Paws.
                        Cara kerja nya dengan cara menginputkan detail informasi peliharaan kamu, nama, umur dan berat badan.
                        Maka system akan merekomendasi kan makanan dan vaksin yang sesuai untuk peliharaan kamu.</p>
                    <img class="img-fluid" alt="100%x280" src="img/CaRecommend.png">
                </div>
            </div>
        </div>

        <div class="col-7 pt-5 pb-5">
            <div class="card border-dark mb-3" style="max-width: 40rem;">
                <div class="row">
                    <div class="col-sm-6 pt-5">
                        <img  alt="100%x280" width="120" height="120" src="img/carecommend/cat 1.png"> <br>
                        <div class="mt-3"> <p>Kucing</p></div>
                    </div>
                    <div class="col-sm-6 pt-5">
                        <img  alt="100%x280" width="120" height="120" src="img/carecommend/doggo 1.png">
                        <div class="mt-3"> <p>Anjing</p></div>
                    </div>
                </div>
                <div class="card-body " align="center">
                    <form>
                        <div class="mb-3" style="width: 60%" align="left">
                            <label class="form-label" >Nama</label>
                            <input type="nama" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3" style="width: 60%" align="left">
                            <label class="form-label" >Umur</label>
                            <input type="umur" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3" style="width: 60%" align="left">
                            <label class="form-label" >Berat</label>
                            <input type="berat" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="mb-3" style="width: 60%" align="left">
                            <button class="btn btn-sm mt-2 fw-bold" type="submit" style="background-color: #8DB1F3;color:white;border-radius:12px;">Submit</button>
                        </div>
                    </form>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
