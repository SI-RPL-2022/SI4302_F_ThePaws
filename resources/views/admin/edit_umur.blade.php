@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
                <div class="col-9 col-sm-10 mt-5 pt-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ '/admin/carecommend/umur/update/'.$umur->id.'' }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Rentang Umur</label>
                                    <input type="text" class="form-control form-control-sm @error('umur') is-invalid @enderror" name="umur" value="{{ $umur->umur }}">
                                    @error('umur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button class="btn btn-sm mt-2 fw-bold" type="submit" style="background-color: #8DB1F3;color:white;border-radius:12px;">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
    </div>
</div>
@endsection
