@extends('adminlte::page')

@section('title','Edit User')

@section('content')

<form action="/dashboard/user/{{$user->id}}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label>Nama</label>
<input type="text" name="name" value="{{$user->name}}" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" value="{{$user->email}}" class="form-control">
</div>

<div class="mb-3">
<label>Phone</label>
<input type="text" name="phone" value="{{$user->phone}}" class="form-control">
</div>

<div class="mb-3">
<label>Address</label>
<textarea name="address" class="form-control">{{$user->address}}</textarea>
</div>

<div class="mb-3">
<label>Kategori</label>

<select name="category_id" class="form-control">

@foreach($categories as $c)

<option value="{{$c->id}}" 
@if($user->category_id==$c->id) selected @endif>

{{$c->category_name}}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label>Password Baru</label>

<input type="password"
       name="password"
       class="form-control"
       placeholder="Kosongkan jika tidak ingin mengganti password">
</div>

<div class="mb-3">
<label>Konfirmasi Password</label>

<input type="password"
       name="password_confirmation"
       class="form-control">
</div>

<button class="btn btn-primary">
Update
</button>

<button class="btn btn-secondary" onclick="window.history.back()">
    Kembali
</button>

</form>

@endsection