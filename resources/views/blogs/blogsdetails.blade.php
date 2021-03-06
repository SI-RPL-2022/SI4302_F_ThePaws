@extends("layouts.main")
@section('container')
    @php
    use App\Models\Kategori;
    use App\Models\Kategori2;
    use App\Models\Blog;
    use App\Models\User;
    use Illuminate\Support\Carbon;
    @endphp
    <div class="container">
        <div class="row mt-3">
            <div class="col-7 ">
                <div class="card-body text-start">
                    <div class="mb-3 text-start">
                        <h1 class="text-start">Blogs</h1>
                        <br>
                        <h2 class="text-start">{{ $blog->judul }}</h2>
                        <div class="card-text mb-1 text-start" style="font-size:15px;">
                            @if ($blog->kategori1 == 1)
                                <span class="badge"
                                    style="background-color:#0000FF;">{{ $kategori = Kategori::find($blog->kategori1)->nama }}</span>
                            @elseif($blog->kategori1 == 2)
                                <span class="badge"
                                    style="background-color:#FF0000;">{{ $kategori = Kategori::find($blog->kategori1)->nama }}</span>
                            @endif
                            @if ($blog->kategori2 == 1)
                                <span class="badge"
                                    style="background-color:#FFDF00;">{{ $kategori2 = Kategori2::find($blog->kategori2)->nama }}</span>
                            @elseif($blog->kategori2 == 2)
                                <span class="badge"
                                    style="background-color:#00FF00;">{{ $kategori2 = Kategori2::find($blog->kategori2)->nama }}</span>
                            @elseif($blog->kategori2 == 3)
                                <span class="badge"
                                    style="background-color:#FF69B4;">{{ $kategori2 = Kategori2::find($blog->kategori2)->nama }}</span>
                            @endif
                        </div>
                        <img src="{{ asset('img/admin.png') }}" alt="" width="40" height="40"
                            class="rounded-circle me-1"><small class="text-muted"> {{ $blog->creator }}
                            <b>&nbsp;.&nbsp;</b>
                            {{ Carbon::parse($blog->updated_at)->translatedFormat('l, d F Y H:m:s') }}</small>
                    </div>
                        <img src="{{ asset('img/' . $blog->foto . '') }}" class="card img-top rounded" width="720px">
                            <div align="justify" style="font-size:15px;">
                                <p class="mt-3">{{ $blog->deskripsi }}</p>
                            </div>

                    {{-- FE KOMENTAR --}}
                        <form action="/blogs/{id}/comment" method="post">
                            @csrf
                            <div class="form-group">
                                <p for="" style="text-align: left;"><b>Leave A Comment</b></p>
                                @if(auth()->user())
                                    <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>
                                @endif
                                <input type="text" name="blog_id" value="{{ $blog->id }}"  hidden>
                                @if(auth()->user())
                                    <textarea placeholder="{{ 'Komentar sebagai '. auth()->user()->name .'' }}" name="komentar" class="form-control form-control-sm " cols="4" rows="4" style="resize:none;"></textarea>
                                @else
                                    <textarea placeholder="Tulis Komentar..." name="komentar" class="form-control form-control-sm " cols="4" rows="4" style="resize:none;"></textarea>
                                @endif
                                    <span class="invalid-feedback" role="alert">
                                        <strong>ALERT</strong>
                                    </span>
                                @if(auth()->user())
                                    <button type="submit" class="btn btn-sm btn-primary mt-2" style="font-size:12px; ">Posting Komentar</button>
                                @else
                                <button type="submit" class="btn btn-sm btn-primary mt-2" style="font-size:12px; " disabled>Posting Komentar</button>
                                @endif
                            </div>
                        </form>

                    @if(auth()->user())
                    @else
                        <div class="text-center fw-bold" style="font-size:13px;">
                            Silahkan Login terlebih dahulu, sebelum memberikan komentar! <a href="{{ url('/login') }}" class="text-decoration-none"><small>Login Disini</small></a>
                        </div>
                    @endif

                    <div class="mt-5">
                        <p>{{ $comment->count() }} Komentar</p>
                        <div class="border mt-3">
                            @foreach ($comment as $c)
                            <div class="row p-2 align--center">
                                <div class="col col-2 text-center">
                                    <img src="{{ asset(''.User::where('id', $c->user_id)->value('image').'') }}" class="rounded-circle" width="70px" height="70px" alt="">
                                </div>
                                <div class="col col-10 ">
                                    <div class="row">
                                        <div class="col col-12">
                                            <h6>{{ User::where('id', $c->user_id)->value('name') }}  - <small class="text-muted fw-normal">1 menit yang lalu</small></h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-12">
                                            <p class="font-size-sm">{{ $c->comment }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-1"></div>
            <div class="col-4 mt-3">
                <div class="" style=" background-color:rgb(255,255,255);">
                    <div class="row justify-content-center">
                        <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                            <h5>Kategori</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            @foreach ($kategori1 as $key)
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" fs-6">
                                            {{ $key->nama }}
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5">
                                        <div class=" fs-6">
                                            @if ($key->nama == 'Anjing')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#0000FF;">{{ $blogs->where('kategori1', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'Kucing')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FF0000;">{{ $blogs->where('kategori1', $key->id)->count() }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <hr style="color:#F87575;">
                                    </div>
                                </div>
                            @endforeach

                            @foreach ($kategoris as $key)
                                <div class="row">
                                    <div class="col-6">
                                        <div class=" fs-6">
                                            {{ $key->nama }}
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5">
                                        <div class=" fs-6">
                                            @if ($key->nama == 'Penyakit')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FFDF00;">{{ $blogs->where('kategori2', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'Perawatan')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#00FF00;">{{ $blogs->where('kategori2', $key->id)->count() }}</span>
                                            @elseif($key->nama == 'First Aid')
                                                <span class="badge rounded-pill"
                                                    style="background-color:#FF69B4;">{{ $blogs->where('kategori2', $key->id)->count() }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                    </div>
                                    <div class="col-8">
                                        <hr style="color:#F87575;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="" style=" background-color:rgb(255,255,255);">
                    <div class="row justify-content-center">
                        <div class="col-5 col-lg-8 text-center mt-1 mb-3" style="border-bottom:2px solid #F87575;">
                            <h5>Other Article</h5>
                        </div>
                    </div>
                    @php
                        $o = 0;
                    @endphp
                    @foreach ($blogs as $key)
                        @if ($key->id != $blog->id && $o != 3)
                            <div class="row g-0 mb-3 justify-content-center">
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ asset('img/' . $key->foto . '') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="{{ '/blogs/' . $blog->id . '' }}" class="text-decoration-none text-dark">
                                            <h5 class="card-title text-start">{{ $key->judul }}</h5>
                                        </a>
                                        <p class="mb-1 text-start" style="font-size:12px;">
                                            @if ($kategori1 = Kategori::find($key->kategori1)->nama == 'Anjing')
                                                <span class="badge text-start"
                                                    style="background-color:#0000FF">{{ $kategori1 = Kategori::find($key->kategori1)->nama }}</span>
                                            @elseif($kategori1 = Kategori::find($key->kategori1)->nama == 'Kucing')
                                                <span class="badge text-start"
                                                    style="background-color:#FF0000">{{ $kategori1 = Kategori::find($key->kategori1)->nama }}</span>
                                            @endif
                                            @if ($kategori2 = Kategori2::find($key->kategori2)->nama == 'Penyakit')
                                                <span class="badge text-start"
                                                    style="background-color:#FFDF00;">{{ $kategori2 = Kategori2::find($key->kategori2)->nama }}</span>
                                            @elseif($kategori2 = Kategori2::find($key->kategori2)->nama == 'First Aid')
                                                <span class="badge text-start"
                                                    style="background-color:#00FF00;">{{ $kategori2 = Kategori2::find($key->kategori2)->nama }}</span>
                                            @elseif($kategori2 = Kategori2::find($key->kategori2)->nama == 'Perawatan')
                                                <span class="badge text-start"
                                                    style="background-color:#FF69B4;">{{ $kategori2 = Kategori2::find($key->kategori2)->nama }}</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @php
                                $o++;
                            @endphp
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
