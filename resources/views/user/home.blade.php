@extends('user-layouts.main')
@section('container')
@php
use Illuminate\Support\Carbon;
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
              <div class="col-md-5">
                <div class="text-center">
                  <b><p>Foto Profil</p></b>
                  @if (empty($user->image))
                  <p>Anda belum melengkapi data diri anda</p>
                  @else
                  @php
                      $image = substr($user->image,6)
                  @endphp
                  <img src="{{ asset('storage/'.$image.'') }}" class="avatar img-circle" alt="avatar" width="250px">
                  @endif
                </div>
              </div>

              <!-- edit form column -->
              <div class="col-md-7  personal-info">
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
                <div class="mb-3 container-grid">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="row">
                              <b>Nama Lengkap</b>
                              @if (empty($user->name))
                                  <p>Anda belum melengkapi data diri anda</p>
                              @else
                                  <p>{{ $user->name }}</p>
                              @endif
                          </div>
                          <div class="row">
                              <b>Email</b>
                              @if (empty($user->email))
                                  <p>Anda belum melengkapi data diri anda</p>
                              @else
                                  <p>{{ $user->email }}</p>
                              @endif
                          </div>
                          <div class="row">
                              <b>Tanggal Lahir</b>
                              @if (empty($user->tanggal_lahir))
                                  <p>Anda belum melengkapi data diri anda</p>
                              @else
                                  <p>{{ Carbon::parse($user->tanggal_lahir)->translatedFormat('l, d F Y') }}</p>
                              @endif
                          </div>
                          <div class="row">
                              <b>Jenis Kelamin</b>
                              @if (empty($user->jenis_kelamin))
                                  <p>Anda belum melengkapi data diri anda</p>
                              @else
                                  <p>{{ $user->jenis_kelamin }}</p>
                              @endif
                          </div>
                          <div class="row">
                              <b>Alamat</b>
                              @if (empty($user->alamat))
                                  <p>Anda belum melengkapi data diri anda</p>
                              @else
                                  <p>{{ $user->alamat }}</p>
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center mb-3">
                  <a class="btn paws-peach-btn" href="{{ route("user.edit") }}" role="button" style="background-color: #f87575; color: white; border-radius: 2em; border: 0;">Edit Profil</a>
              </div> 
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection