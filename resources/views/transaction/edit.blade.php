@extends('adminlte::page')

@section('title','Detail Transaksi')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Detail Transaksi</h3>
    </div>
    <div class="card-body">

        <div class="mb-3">
            <label>User</label>
            <input type="text" class="form-control" value="{{ $users->firstWhere('id', $transaction->user_id)->name ?? '' }}" readonly>
        </div>

        <div class="mb-3">
            <label>Produk</label>
            <input type="text" class="form-control" value="{{ $products->firstWhere('id', $transaction->product_id)->product_name ?? '' }}" readonly>
        </div>

        <div class="mb-3">
            <label>Tanggal Transaksi</label>
            <input type="date" class="form-control" value="{{ $transaction->transaction_date }}" readonly>
        </div>

        <div class="mb-3">
            <label>Total</label>
            <input type="number" class="form-control" value="{{ $transaction->total_price }}" readonly>
        </div>

        <div class="mb-3">
            <label>Status Pembayaran</label>
            <input type="text" class="form-control" value="{{ ucfirst(str_replace('_', ' ', $transaction->payment_status)) }}" readonly>
        </div>

        <button class="btn btn-secondary" onclick="window.history.back()">
            Kembali
        </button>
    </div>
</div>

@endsection
