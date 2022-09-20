@extends('layout.app')

@section('title')
Home
@endsection

@section('Content')
<div class="container text-center">
    <div class="row g-2 text-center">
        <div class="col-6">
            <div class="p-3 border bg-primary mt-3">50 Barang
                <i class="fa fa-boxes"></i>
            </div>
        </div>

        <div class="col-6">
            <div class="p-3 border bg-success mt-3">5 Kategori
                <i class="fa fa-tag"></i>
            </div>
        </div>

        <div class="col-6">
            <div class="p-3 border bg-light mt-3">10 Suplier
                <i class="fa fa-truck"></i>
            </div>
        </div>

        <div class="col-6">
            <div class="p-3 border bg-light mt-3">50 pembeli
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light mt-3">60 pembelian
                <i class="fa-solid fa-bag-shopping"></i>
            </div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light mt-3">88 penjualan
            <i class="fa-solid fa-truck-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
</div>
@endsection