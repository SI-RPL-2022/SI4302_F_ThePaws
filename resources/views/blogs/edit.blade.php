@extends('blogs.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Artikel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ url('/blogs/update/'.$blogs->id) }}" method="POST">
        @csrf
        <!-- @method('PUT') -->
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul Artikel:</strong>
                    <input type="text" class="form-control form-control-sm @error('judul') is-invalid @enderror" value="{{ $blogs->judul; }}" name="judul">
                    <!-- <input type="text" name="judul" value="{{ $blogs->judul }}" class="form-control" placeholder="judul"> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Hewan:</strong>
                    <input class="form-control" style="height:150px" name="jenis" placeholder="jenis">{{ $blogs->jenis }}</textarea>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <input class="form-control" style="height:150px" name="kategori" placeholder="kategori">{{ $blogs->kategori }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection