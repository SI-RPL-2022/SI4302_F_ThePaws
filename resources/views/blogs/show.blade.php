@extends('blogs.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Artikel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul:</strong>
                {{ $blogs->judul }}
            </div>
        </div>
            <div class="form-group">
                <strong>Jenis Hewan:</strong>
                {{ $blogs->jenis }}
            </div>
                <div class="form-group">
                     <strong>Kategori:</strong>
                     {{ $blogs->kategori }}
            </div>
                 <div class="form-group">
                     <strong>Tanggal Pembuatan:</strong>
                    {{ $blogs->created_at }}
                </div>
        </div>
    </div>
 </div>
@endsection