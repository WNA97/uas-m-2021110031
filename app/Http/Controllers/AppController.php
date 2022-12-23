<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;

class AppController extends Controller
{
    function index()
    {
        $transaksi = Transaction::count();
        $akun = Account::count();
        return view('index', compact('transaksi', 'akun'));
    }
}
