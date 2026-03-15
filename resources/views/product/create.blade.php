@extends('adminlte::page')

@section('title','Admin | Tambah Produk')

@section('content')

<form action="/dashboard/product" method="POST">

@csrf

<div class="mb-3">
<label>Nama Produk</label>
<input type="text" name="product_name" class="form-control">
</div>

<div class="mb-3">
<label>Deskripsi</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="price" class="form-control">
</div>

<button class="btn btn-success">
Simpan
</button>

<button class="btn btn-secondary" onclick="window.history.back()">
    Kembali
</button>

</form>

@endsection