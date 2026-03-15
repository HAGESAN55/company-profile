@extends('adminlte::page')

@section('title','Tambah Transaksi')

@section('content')

<form action="/dashboard/transaction" method="POST">

@csrf

<div class="mb-3">
<label>User</label>

<select name="user_id" class="form-control">

<option value="">-- Pilih User --</option>

@foreach($users as $u)
    @if($u->category_id == '2')
        <option value="{{$u->id}}">{{$u->name}}</option>
    @endif
@endforeach

</select>

</div>

<div class="mb-3">
<label>Produk</label>

<select name='product_id'
    id = 'product_id'
    class="form-control"
    onchange="setPrice()">

<option value="">-- Pilih Produk --</option>

@foreach($products as $p)

<option value="{{$p->id}}"
    data-price="{{$p->price}}">
{{$p->product_name}}
</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label>Tanggal Transaksi</label>

<input type="date" name="transaction_date" class="form-control">

</div>

<div class="mb-3">
<label>Total Harga</label>

<input type="text"
    id="total_price_display"
    class="form-control"
    readonly>

<input type="hidden"
    id="total_price"
    name="total_price">

<script>
function formatRupiah(angka) {
    if (!angka) return '';
    angka = Math.round(Number(angka)); // Membulatkan ke rupiah terdekat
    return 'Rp ' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
}

function setPrice() {
    var select = document.getElementById('product_id');
    var price = select.options[select.selectedIndex].getAttribute('data-price');
    if (price) {
        var rounded = Math.round(Number(price));
        document.getElementById('total_price_display').value = formatRupiah(price);
        document.getElementById('total_price').value = Number(price);
    } else {
        document.getElementById('total_price_display').value = '';
        document.getElementById('total_price').value = '';
    }
}
</script>
</div>


<div class="mb-3">
    <label>Status Pembayaran</label>
    <input type="text" value="Belum Lunas" class="form-control" readonly>
    <input type="hidden" name="payment_status" value="belum_lunas">
</div>

<button class="btn btn-success">
Simpan
</button>

<button class="btn btn-secondary" onclick="window.history.back()">
    Kembali
</button>

</form>

@endsection