@extends('admin-layouts.main')
@section('container')
    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
                <div class="pull-left">
                    <h2></h2>
                </div>
                <div class="pull-right mt-5 mb-3">
                    <a class="btn btn-success" href="http://127.0.0.1:8000/admin/blogs/create"
                        style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;"> Tambah
                        Artikel</a>
                </div>
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Vet</th>
                            <th>Kategori Hewan</th>
                            <th>Kategori Informasi</th>
                            <th>Tanggal Pembuatan</th>
                            <th width="280px">Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Penyebab Dan Cara Mengobati Kucing Jika Muntah</td>
                            <td>2</td>
                            <td>2</td>
                            <td>2022-04-18 08:00:13</td>
                            <td>
                                <form action="http://127.0.0.1:8000/admin/blogs/delete/1" method="POST">


                                    <a href="http://127.0.0.1:8000/blogs/1" class="btn btn-sm fas fa-eye"
                                        style="background-color: #F87575;" aria-hidden="true"></a>


                                    <a href="http://127.0.0.1:8000/admin/blogs/edit/1" class="btn btn-sm fas fa-edit"
                                        style="background-color: #F87575;" aria-hidden="true"></a>

                                    <input type="hidden" name="_token" value="IyIlm7NndKblydRoaZ8zN8QMp5ym0KohenyyZWEy">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                    <a href="http://127.0.0.1:8000/admin/blogs/delete/1" class="btn btn-sm fas fa-trash-alt"
                                        style="background-color: #F87575;" aria-hidden="true"></a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                    <ul class="pagination">

                        <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                            <span class="page-link" aria-hidden="true">‹</span>
                        </li>

                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link"
                                href="#">2</a></li>

                        <li class="page-item">
                            <a class="page-link" href="#" rel="next"
                                aria-label="Next »">›</a>
                        </li>
                    </ul>
                </nav>

            </div>
        @endsection
