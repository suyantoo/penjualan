@extends('layout.app')

@section('title')
Home
@endsection

@section('content')
    <div class="row g-2 text-center">
        <div class="col-3">
            <div class="p-3 border bg-black text-white mt-3"> 10 Barang <i class="fa fa-boxes"></i></div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-black text-white mt-3"> 15 Kategpori <i class="fa fa-tag"></i></div>
        </div>

        <div class="col-3">
            <div class="p-3 bg-black text-white mt-3"> 5 Suplier <i class="fa fa-truck"></i></div>
        </div>

        <div class="col-3">
            <div class="p-3 border bg-black text-white mt-3"> 100 member <i class="fa fa-users"></i></div>
        </div>
    </div>
@endsection