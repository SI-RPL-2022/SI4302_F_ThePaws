@extends('admin-layouts.main')
@section('container')

    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
                <div class="row px-2 py-3">
                    <div class="col-3">
                        <a href="{{ route('admin.food.create') }}" class="btn btn-sm mx-2 fw-bold"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                            Makanan</a>
                    </div>
                    <div class="col-6 text-center my-auto">
                        <h5>Makanan</h5>
                    </div>
                    <div class="col-3 text-end my-auto">
                        <h5>Total Makanan : <span class="badge text-dark"
                                style="background-color: #F87575;">{{ $data1->count() }}</span></h5>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col-12">
                        @if (session('errors1'))
                            <div class="alert alert-danger d-flex alert-dismissible mt-1">
                                Error:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('success1'))
                            <div class="alert alert-success d-flex alert-dismissible mt-1">
                                <strong>{{ Session::get('success1') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row table-responsive px-3">
                    <table class="table table-bordered" style="background-color: #FFFFFF; border-color: lightgrey;">
                        <thead class="text-center text-nowrap">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data1 as $food)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $food->nama }}</td>
                                    <td class="text-center">{{ $food->berat_badan }}</td>
                                    <td class="text-center">{{ $food->umur }}</td>
                                    @foreach ($data3 as $kategori)
                                        @if ($kategori->id == $food->kategori)
                                            <td class="text-center">
                                                {{ $kategori->where('id', $food->kategori)->value('nama') }}</td>
                                        @endif
                                    @endforeach
                                    <td class="text-center"><img src="{{ asset('img/foods/' . $food->foto . '') }}"
                                            class="img-fluid" width="30%" alt="">
                                    </td>
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/carecommend/food/edit/' . $food->id) }}" class="btn btn-sm"
                                            style="background-color: #F87575;"><i class="fas fa-edit"></i></a>
                                        <a href="{{ url('/admin/carecommend/food/delete/' . $food->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row px-2 py-3 mt-5">
                    <div class="col-3">
                        <a href="{{ route('admin.vaccine.create') }}" class="btn btn-sm mx-2 fw-bold"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                            Vaksin</a>
                    </div>
                    <div class="col-6 text-center my-auto">
                        <h5>Vaksin</h5>
                    </div>
                    <div class="col-3 text-end my-auto">
                        <h5>Total Vaksin : <span class="badge text-dark"
                                style="background-color: #F87575;">{{ $data2->count() }}</span></h5>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col-12">
                        @if (session('errors2'))
                            <div class="alert alert-danger d-flex alert-dismissible mt-1">
                                Error:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('success2'))
                            <div class="alert alert-success d-flex alert-dismissible mt-1">
                                <strong>{{ Session::get('success2') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row table-responsive px-3">
                    <table class="table table-bordered" style="background-color: #FFFFFF; border-color: lightgrey;">
                        <thead class="text-center text-nowrap">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Vaksin</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Berat Badan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data2 as $vaccine)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $vaccine->nama }}</td>
                                    <td class="text-center">{{ $vaccine->umur }}</td>
                                    <td class="text-center">{{ $vaccine->berat_badan }}</td>
                                    @foreach ($data3 as $kategori)
                                        @if ($kategori->id == $vaccine->kategori)
                                            <td class="text-center">
                                                {{ $kategori->where('id', $vaccine->kategori)->value('nama') }}</td>
                                        @endif
                                    @endforeach
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/carecommend/vaccine/edit/' . $vaccine->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ url('/admin/carecommend/vaccine/delete/' . $vaccine->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row px-2 py-3 mt-5">
                    <div class="col-3">
                        <a href="{{ route('admin.umur.create') }}" class="btn btn-sm mx-2 fw-bold"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                            Umur</a>
                    </div>
                    <div class="col-6 text-center my-auto">
                        <h5>Umur</h5>
                    </div>
                    <div class="col-3 text-end my-auto">
                        <h5>Total Umur : <span class="badge text-dark"
                                style="background-color: #F87575;">{{ $data2->count() }}</span></h5>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col-12">
                        @if (session('errors2'))
                            <div class="alert alert-danger d-flex alert-dismissible mt-1">
                                Error:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('success2'))
                            <div class="alert alert-success d-flex alert-dismissible mt-1">
                                <strong>{{ Session::get('success2') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row table-responsive px-3">
                    <table class="table table-bordered" style="background-color: #FFFFFF; border-color: lightgrey;">
                        <thead class="text-center text-nowrap">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Rentang Umur</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data4 as $umur)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $umur->umur }}</td>
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/carecommend/umur/edit/' . $umur->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ url('/admin/carecommend/umur/delete/' . $umur->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row px-2 py-3 mt-5">
                    <div class="col-3">
                        <a href="{{ route('admin.BB.create') }}" class="btn btn-sm mx-2 fw-bold"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                            Berat Badan</a>
                    </div>
                    <div class="col-6 text-center my-auto">
                        <h5>Berat Badan</h5>
                    </div>
                    <div class="col-3 text-end my-auto">
                        <h5>Total Berat Badan : <span class="badge text-dark"
                                style="background-color: #F87575;">{{ $data2->count() }}</span></h5>
                    </div>
                </div>
                <div class="row px-2">
                    <div class="col-12">
                        @if (session('errors2'))
                            <div class="alert alert-danger d-flex alert-dismissible mt-1">
                                Error:
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        @if (Session::has('success2'))
                            <div class="alert alert-success d-flex alert-dismissible mt-1">
                                <strong>{{ Session::get('success2') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row table-responsive px-3">
                    <table class="table table-bordered" style="background-color: #FFFFFF; border-color: lightgrey;">
                        <thead class="text-center text-nowrap">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Rentang Berat Badan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data5 as $bb)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $bb->bb }}</td>
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/carecommend/beratbadan/edit/' . $bb->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="{{ url('/admin/carecommend/beratbadan/delete/' . $bb->id) }}"
                                            class="btn btn-sm" style="background-color: #F87575;"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
