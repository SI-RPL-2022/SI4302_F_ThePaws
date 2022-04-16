@extends('user-layouts.main')
@section('container')


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
                  <img src="/img/Userjennie.png" class="avatar img-circle" alt="avatar" width="250px">
                </div>
              </div>

              <!-- edit form column -->
              <div class="col-md-9 personal-info">

                <form class="form-horizontal" role="form" action="{{ route('user.profile')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Nama Lengkap</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="Jane">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Alamat Email</label>
                    <div class="col-lg-8">
                      <input class="form-control" type="text" value="janesemail@gmail.com">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Jenis Kelamin</label>
                    <div class="col-lg-8">
                      <label class="radio-inline"> <input type="radio" name="gender">Laki-Laki</label>
                      <label class="radio-inline"><input type="radio" name="gender">Perempuan</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-lg-3 control-label">Tanggal lahir</label>
                    <div class="col-lg-8">
                      <div class="input-group date" id="datepicker">
                        <input type="date" class="form-control" id="date" />
                        <span class="input-group-append">
                          <span class="input-group-text bg-light d-block">
                            <i class="fa fa-calendar"></i>
                          </span>
                        </span>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-md-3 control-label">Alamat</label>
                    <div class="col-md-8">
                      <textarea class="form-control" id="form7Example7" rows="4">
                            </textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Foto Profile</label>
                    <div class="col-md-8">
                      <input type="file" class="form-control" name="image">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                      <!-- <input type="button" class="btn btn-primary" value="Simpan"> -->
                      <input type="submit" class="btn btn-primary" value="Simpan">
                      <span></span>
                      <input type="reset" class="btn btn-default" value="Cancel">
                    </div>
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