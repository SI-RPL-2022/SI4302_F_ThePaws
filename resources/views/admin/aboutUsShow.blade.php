@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col">
            <div class="row px-2" style="height: 80px;">
                <div class="col-12">
                    @if(session('errors'))
                        <div class="alert alert-danger d-flex alert-dismissible mt-1">
                            Error:
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(Session::has('success'))
                        <div class="alert alert-success d-flex alert-dismissible mt-1">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row px-2">
                <div class="col mt-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.aboutus.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Teks About Us</label>
                                    <textarea type="text"
                                        class="form-control form-control-sm @error('text') is-invalid @enderror" name="text"
                                        id="text" rows='5'>{{ $data->text }}</textarea>
                                    @error('text')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-sm mt-2 fw-bold" type="submit"
                                    style="background-color: #8DB1F3;color:white;border-radius:12px;">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
