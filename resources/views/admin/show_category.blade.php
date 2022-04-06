@extends('admin-layouts.main')
@section('container')

<div class="container-fluid" style="min-height: 768px; background-color: #EBEBEB;">
    <div class="row">

        @include('admin-layouts.sidebar')

        {{-- show all data --}}
        <div class="col-9 col-sm-10">
            <div class="row px-2">
                <div class="col-6 text-end my-auto">
                    <h5>Total Kategori : <span class="badge text-dark" style="background-color: #F87575;">{{ $data->count() }}</span></h5>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-12">
                    <a href="{{ route('admin.category.tambah') }}" class="btn btn-sm mx-2 fw-bold" style="background-color: #8DB1F3;">Tambah Kategori</a>
                </div>
            </div>
            <div class="row px-2">
                <div class="col-12">
                    @if(session('errors'))
                        <div class="alert alert-danger d-flex alert-dismissible mt-1">
                            Error:
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success d-flex alert-dismissible mt-1">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                        @foreach ($data as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->nama_kategori }}</td>
                                <td class="text-center text-nowrap">
                                    <a href="{{ url('/admin/category/edit/'.$category->id) }}" class="btn btn-sm" style="background-color: #F87575;" ><i class="fas fa-edit"></i></a>
                                    <a href="{{ url('/admin/category/delete/'.$category->id) }}" class="btn btn-sm" style="background-color: #F87575;" ><i class="fas fa-trash-alt"></i></a>
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
