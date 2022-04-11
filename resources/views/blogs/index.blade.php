@extends('blogs.layout')
@section('content')
<div class="row">
    @include('admin-layouts.sidebar')
    <div class="col-9 col-sm-10 ">
        <div class="pull-left">
            <h2></h2>
        </div>
        <div class="pull-right mt-5 mb-3">
            <a class="btn btn-success" href="{{ route('blogs.create') }}" class="btn btn-sm mx-2 fw-bold" style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;"> Tambah Artikel</a>
        </div>


        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif


        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Judul Artikel</th>
                <th>Jenis Hewan</th>
                <th>Kategori</th>
                <th>Tanggal Pembuatan</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $blog->judul }}</td>
                <td>{{ $blog->jenis }}</td>
                <td>{{ $blog->kategori }}</td>
                <td>{{ $blog->created_at }}</td>
                <td>
                    <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">


                        <a href="{{ route('blogs.show',$blog->id) }}" class="btn btn-sm" style="background-color: #F87575;"><i class="fas fa-eye"></a>


                        <a href="{{ route('blogs.edit',$blog->id) }}" class="btn btn-sm" style="background-color: #F87575;"><i class="fas fa-edit"></i></a>

                        @csrf
                        @method('DELETE')

                        <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                        <a href="{{ route('blogs.destroy',$blog->id) }}" class="btn btn-sm" style="background-color: #F87575;"><i class="fas fa-trash-alt"></a>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

{!! $blogs->links() !!}

@endsection