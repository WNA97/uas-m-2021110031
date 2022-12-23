<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Account;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTransactions = Transaction::with('account')->orderByDesc('created_at')->get();
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions', 'allTransactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faker = Faker::create('id_ID');
        $kategori = $faker->randomElement(['Sales ', 'Purchases', 'Receipts', 'Payments']);
        $nama = $faker->name();
        $accounts = Account::all();
        return view('transactions.create', compact('accounts', 'kategori', 'nama'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kategori' => 'required|max:255',
            'nominal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'tujuan' => 'required|max:255',
            'account_id' => 'required',
        ]);
        Transaction::create($validateData);
        $request->session()->flash('success', "Transaksi berhasil disimpan!");
        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $accounts = Account::all();
        return view('transactions.show', compact('accounts', 'transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        $accounts = Account::all();
        return view('transactions.edit', compact('transaction', 'accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        $validateData = $request->validate([
            'kategori' => 'required|max:255',
            'nominal' => 'required|regex:/^\d{1,13}(\.\d{1,4})?$/',
            'tujuan' => 'required|max:255',
            'account_id' => 'required',
        ]);
        $transaction->update($validateData);
        $request->session()->flash('success', "Berhasil melakukan update data!");
        return redirect()->route('transactions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', "Berhasil menghapus transaksi!");
    }
}
