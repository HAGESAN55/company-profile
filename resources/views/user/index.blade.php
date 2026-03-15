@extends('adminlte::page')

@section('title','User')

@section('content')

<a href="/dashboard/user/create" class="btn btn-primary mb-3 mt-3">
Tambah User
</a>

<table class="table table-bordered">

<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Kategori</th>
<th>Aksi</th>
</tr>

@foreach($users as $u)

<tr>

<td>{{ $loop->iteration }}</td>
<td>{{ $u->name }}</td>
<td>{{ $u->email }}</td>
<td>{{ $u->phone }}</td>
<td>{{ $u->address }}</td>
<td>{{ $u->category->category_name ?? 'Tidak ada kategori' }}</td>

<td>

<a href="/dashboard/user/{{$u->id}}/edit" class="btn btn-warning btn-sm">
Edit
</a>

<form action="/dashboard/user/{{$u->id}}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection