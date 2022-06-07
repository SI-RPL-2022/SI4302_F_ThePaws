@extends('admin-layouts.main')
@section('container')
<div class="container-fluid" style="min-height: 768px; background-color: #F2F2F2;">
    <div class="row">
        @include('admin-layouts.sidebar')
        <div class="col-9 col-sm-10 ">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="mt-5 mb-3">
                <a class="btn btn-success" href="{{ route('admin.adoption.create') }}"
                    style="background-color: #8DB1F3;color:white;border-radius:12px;padding:8px;font-size:16px;">Tambah
                    Adoption</a>
            </div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Nama Peliharaan</th>
                        <th>Kategori</th>
                        <th width="280px">Action</th>
                    </tr>

                </tbody>
            </table>

        </div>
        @endsection

