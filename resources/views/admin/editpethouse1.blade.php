@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col-9 col-sm-10 ">
            <form
                action="{{ '/admin/pethouse/update/'.$pethouse->id.'' }}"
                enctype="multipart/form-data" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Nama Vet</label>
                    <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror"
                        name="name" id="name" value="{{ $pethouse->nama }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kategori1">Kategori Hewan</label>
                    <select class="form-select" name="kategori1" id="">
                        <option selected>Pilih Kategori</option>
                        @foreach ($kategori1 as $k)
                            <option value="{{ $k->id }}"
                                @if ($k->id == $pethouse->kategori1)
                                        {{ 'selected' }}
                                @endif
                                        >{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori1')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="kategori2">Kategori Informasi</label>
                    <select class="form-select" name="kategori2" id="">
                        <option selected>Pilih Kategori</option>
                        @foreach ($kategori2 as $k)
                            <option value="{{ $k->id }}"
                                @if ($k->id == $pethouse->kategori2)
                                        {{ 'selected' }}
                                        @endif
                                        >{{ $k->nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori2')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror"
                        name="alamat" id="alamat" value="{{ $pethouse->alamat }}">
                    @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="no_telepon">No Telepon</label>
                    <input type="text" class="form-control form-control-sm @error('no_telepon') is-invalid @enderror"
                        name="no_telepon" id="no_telepon" value="{{ $pethouse->no_telepon }}">
                    @error('no_telepon')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="website">Website</label>
                    <input type="text" class="form-control form-control-sm @error('website') is-invalid @enderror"
                        name="website" id="website" value="{{ $pethouse->website }}">
                    @error('website')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="rating">Rating</label>
                    <input type="number" class="form-control form-control-sm @error('rating') is-invalid @enderror"
                        name="rating" id="rating" min="0" max="5" step="0.1" value="{{ $pethouse->rating }}">
                    @error('rating')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="maps">Maps</label>
                    <input type="text" class="form-control form-control-sm @error('maps') is-invalid @enderror"
                        name="maps" id="maps" value="{{ $pethouse->maps }}">
                    @error('maps')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <h6 class="mb-2">Jam Operasional</h6>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Senin</label>
                            <input type="text" name="day[1]" id="" value="1" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open1" value="{{ empty($workinghours[0]) ? '' : $workinghours[0]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close1" value="{{ empty($workinghours[0]) ? '' : $workinghours[0]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Selasa</label>
                            <input type="text" name="day[2]" id="" value="2" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open2" value="{{ empty($workinghours[1]) ? '' : $workinghours[1]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close2" value="{{ empty($workinghours[1]) ? '' : $workinghours[1]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Rabu</label>
                            <input type="text" name="day[3]" id="" value="3" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open3" value="{{ empty($workinghours[2]) ? '' : $workinghours[2]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close3" value="{{ empty($workinghours[2]) ? '' : $workinghours[2]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Kamis</label>
                            <input type="text" name="day[4]" id="" value="4" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open4" value="{{ empty($workinghours[3]) ? '' : $workinghours[3]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close4" value="{{ empty($workinghours[3]) ? '' : $workinghours[3]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Jumat</label>
                            <input type="text" name="day[5]" id="" value="5" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open5" value="{{ empty($workinghours[4]) ? '' : $workinghours[4]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close5" value="{{ empty($workinghours[4]) ? '' : $workinghours[4]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Sabtu</label>
                            <input type="text" name="day[6]" id="" value="6" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open6" value="{{ empty($workinghours[5]) ? '' : $workinghours[5]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close6" value="{{ empty($workinghours[5]) ? '' : $workinghours[5]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col col-1">
                            <label for="">Minggu</label>
                            <input type="text" name="day[7]" id="" value="7" aria-hidden="true" hidden>
                        </div>
                        <div class="col col-5">
                            <input type="time" class="form-control form-control-sm @error('open[]') is-invalid @enderror"
                                name="open[]" id="open7" value="{{ empty($workinghours[6]) ? '' : $workinghours[6]->open }}">
                            @error('open[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col col-1">-</div>
                        <div class="col col-5">
                            <input type="time"
                                class="form-control form-control-sm @error('close[]') is-invalid @enderror" name="close[]"
                                id="close7" value="{{ empty($workinghours[6]) ? '' : $workinghours[6]->close }}">
                            @error('close[]')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="foto">Foto</label>
                    <input type="file" class="form-control form-control-sm @error('foto') is-invalid @enderror"
                        name="foto" id="foto" value="{{ old('foto') }}">
                    @error('foto')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div>
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi"
                        class="form-control form-control-sm @error('deskripsi') is-invalid @enderror">{{ $pethouse->deskripsi }}</textarea>
                    @error('deskripsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="text-center">
                    <button class="btn btn-sm mt-2 fw-bold" type="submit"
                        style="background-color: #8DB1F3;color:white;border-radius:12px;">Simpan</button>
            </form>
        </div>
    </div>
    @endsection
