@extends('user-layouts.main')
@section('container')
@php
@endphp

<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
  <div class="row">
    @include('user-layouts.sidebaruser')
    <div class="col-9 col-sm-10 ">

      <div class="card" style="margin-top: 5ex; margin-left: 3ex; margin-right: 3ex;">
        <div class="card-body">
          <div class="container" style="margin-top:5ex">
            <div class="row">
              <!-- left column -->
              <div class="col-md-3">
                <div class="text-center">
                  <p>Foto Profile</p>
                  @php
                      $image = substr($user->image,6)
                  @endphp
                  <img src="{{ asset('storage/'.$image.'') }}" class="avatar img-circle" alt="avatar" width="250px">
                </div>
              </div>

              <!-- edit form column -->
              <div class="col-md-9 personal-info">
                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @elseif (session()->has('error'))
                <div class="alert alert-error alert-dismissible fade show" role="alert">
                  {{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                <form class="" action="/edit/user" method="post" enctype="multipart/form-data">
                  @method('patch')
                  @csrf
                  <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                
                  <div class="mb-3">
                    <label class="form-label" for="name">Nama Lengkap</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}">
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="email">Alamat Email</label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ $user->email }}">
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                    <label class="radio-inline"> <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="laki-laki" {{ ($user->jenis_kelamin == 'laki-laki' ? 'checked="checked"' : '') }}>Laki-Laki</label>
                    <label class="radio-inline"><input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="perempuan" {{ ($user->jenis_kelamin == 'perempuan' ? 'checked="checked"' : '') }}>Perempuan</label>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="tanggal_lahir">Tanggal lahir</label>
                    <div class="input-group date" id="datepicker">
                      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $user->tanggal_lahir }}"/>
                      <span class="input-group-append">
                      </span>
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="4">{{ $user->alamat }}</textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="image">Foto Profile</label>
                    <input type="file" class="form-control" id="image" name="image">
                  </div>

                  <div class="mb-3">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="reset" class="btn btn-default">Batal</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection