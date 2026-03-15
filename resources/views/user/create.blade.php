@extends('adminlte::page')

@section('title','Tambah User')

@section('content')

<form action="/dashboard/user" method="POST">

@csrf

<div class="mb-3">
<label>Nama</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label>Address</label>
<textarea name="address" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<div class="mb-3">
<label>Kategori User</label>
<select name="category_id" class="form-control">

<option value="" disabled selected>-- Pilih Kategori --</option>

@foreach($categories as $c)
    @if($c->category_name != 'Admin')
        <option value="{{$c->id}}">
            {{$c->category_name}}
        </option>
    @endif
@endforeach

</select>
</div>

<button class="btn btn-success">
Simpan
</button>

<button class="btn btn-secondary" onclick="window.history.back()">
    Kembali
</button>

</form>

@endsection