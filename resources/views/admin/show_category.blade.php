@extends('admin-layouts.main')
@section('container')

    <div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
        <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 ">
                <div class="row px-2 py-3">
                    <div class="col-3">
                        <a href="{{ route('admin.category1.tambah') }}" class="btn btn-sm mx-2 fw-bold"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                            Kategori</a>
                    </div>
                    <div class="col-6 text-center my-auto">
                        <h5>Kategori Hewan</h5>
                    </div>
                    <div class="col-3 text-end my-auto">
                        <h5>Total Kategori : <span class="badge text-dark"
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
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data1 as $category)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $category->nama }}</td>
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/category1/edit/' . $category->id) }}" class="btn btn-sm"
                                            style="background-color: #F87575;"><i class="fas fa-edit"></i></a>
                                        <a href="{{ url('/admin/category1/delete/' . $category->id) }}"
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
                        <a href="{{ route('admin.category2.tambah') }}" class="btn btn-sm mx-2 fw-bold"
                            style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                            Kategori</a>
                    </div>
                    <div class="col-6 text-center my-auto">
                        <h5>Kategori Informasi</h5>
                    </div>
                    <div class="col-3 text-end my-auto">
                        <h5>Total Kategori : <span class="badge text-dark"
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
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data2 as $category)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $category->nama }}</td>
                                    <td class="text-center text-nowrap">
                                        <a href="{{ url('/admin/category2/edit/' . $category->id) }}" class="btn btn-sm"
                                            style="background-color: #F87575;"><i class="fas fa-edit"></i></a>
                                        <a href="{{ url('/admin/category2/delete/' . $category->id) }}"
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
