@extends('layout.app')

@section('title')
 Barang
@endsection 

@section('Content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Barang</h5>

            <a type="button"
             class="btn btn-success btn-sm float-end" 
             href="{{route('barang.create')}}">
             <i class="fa fa-plus"></i></a>
        </div>
    </div>

    <div class="card-body">
    <table class="table table-striped">
     <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Supliyer_id</th>
            <th>Kategori_id</th>
            <th>Aksi</th>
        </tr>
     </thead>
<tbody>
     @foreach($barang as $item)
     <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->harga}}</td>
        <td>{{$item->stok}}</td>
        <td>{{! empty($item->suplier->nama) ? $item->suplier->nama : ''}}</td>
        <td>{{! empty($item->kategori->nama) ? $item->kategori->nama : ''}}</td>
        <td>
            <a href="/barang/{{$item->id}}/edit" class="btn btn-warning btn-bg"><i class="fa-solid fa-edit"></i></a>
            |
            <a href="/barang/{{$item->id}}/hapus" class="btn btn-danger btn-bg"><i class="fa-solid fa-trash"></i></a>
        </td>
     </tr>
     @endforeach
</tbody>
</table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection 