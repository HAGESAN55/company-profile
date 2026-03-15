@extends('adminlte::page')

@section('title','Admin | Edit Produk')

@section('content')

<form action="/dashboard/product/{{$product->id}}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama Produk</label>
<input type="text" name="product_name" value="{{$product->product_name}}" class="form-control">
</div>

<div class="mb-3">
<label>Deskripsi</label>
<textarea name="description" class="form-control">{{$product->description}}</textarea>
</div>

<div class="mb-3">
<label>Harga</label>
<input type="number" name="price" value="{{$product->price}}" class="form-control">
</div>

<button class="btn btn-primary">
Update
</button>

<button class="btn btn-secondary" onclick="window.history.back()">
    Kembali
</button>

</form>

@endsection