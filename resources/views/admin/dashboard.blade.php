@extends('admin-layouts.main')
@section('container')

<div class="container-fluid" style="min-height: 768px; ">
    <div class="row">
            @include('admin-layouts.sidebar')
            <div class="col-9 col-sm-10 mt-5 pt-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2" style="background-color: #8DB1F3;border-radius:12px;color:white;">
                                            <h3 class="text-center">Total User</h3>
                                            <i class="fas fa-fw fa-user fa-3x pb-3"></i>
                                            <span class="text-center">{{ $total_user }} </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2" style="background-color: #8DB1F3;border-radius:12px;color:white; cursor: pointer;" onclick="location.href='{{ route('blogs.admin') }}'">
                                            <h3 class="text-center">Article</h3>
                                            <i class="fas fa-fw fa-newspaper fa-3x pb-3"></i>
                                            <span class="text-center">{{ $article }} </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2" style="background-color: #8DB1F3;border-radius:12px;color:white;cursor: pointer;" onclick="location.href='{{ route('admin.adoption') }}'">
                                            <h3 class="text-center">Adoption</h3>
                                            <i class="fas fa-fw fa-paw fa-3x pb-3"></i>
                                            <span class="text-center"> </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3">
                                    <div class="card card-hover">
                                        <div class="p-2" style="background-color: #8DB1F3;border-radius:12px;color:white;cursor: pointer;" onclick="location.href='{{ route('admin.carecommend') }}'">
                                            <h3 class="text-center">CaRecommend</h3>
                                            <i class="fas fa-fw fa-bone fa-3x pb-3"></i>
                                            <span class="text-center"> </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Column -->
                                <div class="col-md-6 col-lg-3 col-xlg-3 pt-5">
                                    <div class="card card-hover">
                                        <div class="p-2" style="background-color: #8DB1F3;border-radius:12px;color:white;cursor: pointer;" onclick="location.href='{{ route('admin.pethouse') }}'">
                                            <h3 class="text-center">PetHouse</h3>
                                            <i class="fas fa-fw fa-house fa-3x pb-3"></i>
                                            <span class="text-center"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
</div>
@endsection
