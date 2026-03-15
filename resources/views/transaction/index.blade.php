@extends('adminlte::page')

@section('title','Transactions')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1 class="h3 mt-1">Daftar Transaksi</h1>
</div>

<a href="/dashboard/transaction/create" class="btn btn-primary mb-3">
Tambah Transaksi
</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>User</th>
<th>Produk</th>
<th>Tanggal</th>
<th>Total</th>
<th>Status</th>
<th>Aksi</th>
</tr>

@foreach($transactions as $t)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $t->user->name }}</td>

<td>{{ $t->product->product_name }}</td>

<td>{{ $t->transaction_date }}</td>

<td>{{ 'Rp ' . number_format($t->total_price, 0, ',', '.') }}</td>

<td>

@if($t->payment_status == 'lunas')

<span class="badge bg-success">Lunas</span>

@else

<span class="badge bg-danger">Belum Lunas</span>

@endif

</td>

<td>

<a href="/dashboard/transaction/{{$t->id}}/edit"
class="btn btn-warning btn-sm">
Detail
</a>

<form action="/dashboard/transaction/{{$t->id}}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button onclick="return confirm('Hapus transaksi ini?')" class="btn btn-danger btn-sm">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection