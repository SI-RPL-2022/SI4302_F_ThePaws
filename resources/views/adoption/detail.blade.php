@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="row mt-3">
            <div class="col-7 ">
                <div class="card-body text-start">
                    <div class="mb-3 text-start">
                        <h1 class="text-start"><a href="" class="text-black">Adoption</a><span> / details</span></h1>
                    </div>
                    <img src="{{ asset('adoption/img/'. $data->foto .'') }}" alt="penyakit-kucing" class="card img-top img-fluid my-3 mx-auto rounded" width="250px">
                    <div align="justify" style="font-size:15px;">
                        <div class="col-12 px-3 py-2" style="border-left:4px solid #F87575; ">
                            <h1>{{ $data->nama_peliharaan }}</h1>
                            {!!$data->deskripsi!!}
                        </div>

                        <table class="table" style="margin-top: 3%">
                            <tbody>
                                <tr class="align-middle">
                                    <td><strong>Jenis Kelamin</strong></td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td><strong>Ras</strong></td>
                                    <td>{{ $data->ras }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td><strong>Umur</strong></td>
                                    <td>{{ $data->umur }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td><strong>Berat</strong></td>
                                    <td>{{ $data->berat }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td><strong>No HP Pemilik</strong></td>
                                    <td>{{ $data->no_hp }}</td>
                                </tr>
                                <tr class="align-middle">
                                    <td><strong>Alamat</strong></td>
                                    <td>{{ $data->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
