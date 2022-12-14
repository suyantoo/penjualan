@extends('layout.app')

@section('title')
Suplier
@endsection

@section('Content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data Suplier</h5>

            <button type="buttom" class="btn btn-success btn-sm float-end" data-bs-toggle="modal"
                data-bs-target=#ModalTambah><i class="fa fa-plus"></i></button>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                <th style="width: 5%">No.</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th style="width: 20%">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($suplier as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->telepon}}</td>
                    <td>{{$item->alamat}}</td>
                    <td>
                        <a href="/suplier/edit/{{$item->id}}" class="btn btn-warning btn-bg"><i class="fa-solid fa-edit"></i></a>
                        |
                        <a href="/suplier/hapus/{{$item->id}}" class="btn btn-danger btn-bg"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Suplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('suplier.store')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama"
                            class="form-control @error('nama') is=invalid @enderror">
                    </div>
                    <div class="form-group mb-3">
                        <label for="telepon">Telepon</label>

                        <input type="text" name="telepon" id="telepon"
                            class="form-control @error('telepon') is=invalid @enderror">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" placeholder="Alamat" id="floatingTextarea"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                |
                <button type="sumbit" class="btn btn-success">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection