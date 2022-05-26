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
                <a class="btn btn-success" href="{{ route('admin.pethouse.create') }}"
                    style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                    Pethouse</a>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Nama Vet</th>
                        <th>Tanggal Pembuatan</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($pethouses as $pethouse)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pethouse->nama }}</td>
                            <td>{{ $pethouse->created_at }}</td>
                            <td>
                                <form action="{{ route('admin.pethouse.destroy',$pethouse->id) }}" method="POST">
                                    {{-- <a href="{{ route('admin.pethouse.show',$pethouse->id) }}" class="btn btn-sm fas fa-eye" style="background-color: #F87575;"></a> --}}
                                    <a href="{{ route('admin.pethouse.edit',$pethouse->id) }}" class="btn btn-sm fas fa-edit" style="background-color: #F87575;"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                    <a href="{{ route('admin.pethouse.destroy',$pethouse->id) }}" class="btn btn-sm fas fa-trash-alt" style="background-color: #F87575;"></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $pethouses->links() }}

        </div>
        @endsection
