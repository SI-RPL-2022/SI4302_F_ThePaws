@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col-9 col-sm-10 ">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="mt-5 mb-3">
                <a class="btn btn-success" href="{{ route('admin.adoption.create') }}"
                    style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                    Adoption</a>
            </div>
            <table class="table table-bordered bg-white">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Peliharaan</th>
                        <th>Kategori</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $datas->nama_peliharaan }}</td>
                        @foreach ($kategori as $kategoris)
                        @if ($kategoris->id == $datas->kategori)
                        <td>{{ $kategoris->where('id', $datas->kategori)->value('nama') }}</td>
                        @endif
                        @endforeach
                        <td>
                            <form action="{{ url('/admin/adoption/delete/' . $datas->id) }}" method="POST">
                                <a href="{{ url('/admin/adoption/edit/' . $datas->id) }}" class="btn btn-sm"
                                    style="background-color: #F87575;"><i class="fas fa-edit"></i></a>
                                @csrf
                                @method('DELETE')
                                <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                <a href="{{ url('/admin/adoption/delete/' . $datas->id) }}"
                                    class="btn btn-sm" style="background-color: #F87575;"><i
                                        class="fas fa-trash-alt"></i></a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}

        </div>
        @endsection

