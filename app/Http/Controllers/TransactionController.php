<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Product;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::with('user', 'product')->get();
        return view('transaction.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $products = Product::all();
        return view('transaction.create', compact('users', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    

        Transaction::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'transaction_date' => now(),
            'total_price' => $request->total_price,
            'payment_status' => $request->payment_status,
        ]);

        return redirect('/dashboard/transaction')->with('success', 'Transaksi berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        $users = User::all();
        $products = Product::all();
        return view('transaction.edit', compact('transaction', 'users', 'products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaction = Transaction::findOrFail($id);
        $total = $request->quantity * Product::find($request->product_id)->price;

        $transaction->update([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'transaction_date' => now(),
            'quantity' => $request->quantity,
            'total_price' => $total,
            'payment_status' => $request->payment_status,
        ]);

        return redirect('/dashboard/transaction')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Transaction::destroy($id);
        return redirect('/dashboard/transaction')->with('success', 'Transaksi berhasil dihapus.');
    }
}
