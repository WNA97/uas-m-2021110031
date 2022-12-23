@extends('layouts.master')

@section('title','Dashboard')

@section('breadcrumbs')
<div class="page-title-box">
    <h4 class="page-title">Dashboard</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Selamat datang di Toko Grosir Serbada</li>
    </ol>
</div>
@endsection

@section('page-content-wrapper')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning mini-stat position-relative">
                <div class="card-body">
                    <div class="mini-stat-desc">
                        <div class="text-white">
                            <h6 class="text-uppercase mt-0 text-white-50">Accounts</h6>
                            <h3 class="mb-3 mt-0">{{ $akun }}</h3>
                            <div class="">
                            </div>
                        </div>
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-account display-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning mini-stat position-relative">
                <div class="card-body">
                    <div class="mini-stat-desc">
                        <div class="text-white">
                            <h6 class="text-uppercase mt-0 text-white-50">Transactions</h6>
                            <h3 class="mb-3 mt-0">{{ $transaksi}}</h3>
                            <div class="">
                            </div>
                        </div>
                        <div class="mini-stat-icon">
                            <i class="mdi mdi mdi-cart-outline display-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
