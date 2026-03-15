@extends('adminlte::page')

@section('title','Admin | Produk')

@section('content')

<a href="/dashboard/product/create" class="btn btn-primary mb-3 mt-3">
Tambah Produk
</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Produk</th>
<th>Harga</th>
<th>Aksi</th>
</tr>

@foreach($products as $p)

<tr>

<td>{{ $loop->iteration }}</td>
<td>{{ $p->product_name }}</td>
<td>Rp. {{ $p->price }}</td>

<td>

<a href="/dashboard/product/{{$p->id}}/edit" class="btn btn-warning btn-sm">
Edit
</a>

<form action="/dashboard/product/{{$p->id}}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection