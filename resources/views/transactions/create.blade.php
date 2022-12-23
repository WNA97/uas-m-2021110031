@extends('layouts.master') @section('title','Create Transactions')
@section('breadcrumbs')
<div class="page-title-box">
    <h4 class="page-title">Transactions</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">2021110031</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Transactions</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
</div>
@endsection @section('page-content-wrapper')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Create Transaction</h4>
                    <p class="text-muted m-b-30"></p>
                    <form action="{{ route('transactions.store') }}" method="POST">
                        @csrf
                        {{-- <div class="form-group row">
                            <label for="id" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-4">
                                <input
                                    class="form-control @error('id') is-invalid @enderror"
                                    type="text"
                                    maxlength="16"
                                    name="id"
                                    id="id"
                                    placeholder="16 digits..."
                                    value="{{ old('id') }}"/>
                        @error('id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
            </div> --}}
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-6">
                    <!-- <input class="form-control @error('kategori') is-invalid @enderror" type="text" name="kategori" id="kategori" value="{{ old('kategori') ?? $kategori}}" /> -->
                    <select class="form-control select2" id="kategori" name="kategori" data-placeholder="Pilih ...">
                        <option value="" selected disabled>Pilih Kategori</option>
                        <option value="Gula">Gula</option>
                        <option value="Snack">Snack</option>
                        <option value="Rokok">Rokok</option>
                        <option value="Gas">Gas</option>
                    </select>
                    @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="nominal" class="col-sm-2 col-form-label">Nominal</label>
                <div class="col-sm-6">
                    <input class="form-control @error('nominal') is-invalid @enderror" type="number" name="nominal" id="nominal" min="0" value="{{ old('nominal') }}" />
                    @error('nominal')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="tujuan" class="col-sm-2 col-form-label">Receiver</label>
                <div class="col-sm-6">
                    <input class="form-control @error('tujuan') is-invalid @enderror" type="text" name="tujuan" id="tujuan" value="{{ old('tujuan') ?? $nama}}" />
                    @error('tujuan')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Account Name</label>
                <div class="col-sm-4">
                    <select class="form-control select2" id="account_id" name="account_id" data-placeholder="Choose ...">
                        <option value="" selected disabled>-Select account-</option>
                        @foreach ($accounts as $account )
                        <option value="{{ $account->id }}">{{ $account->nama }}</option>
                        @endforeach

                    </select>
                    @error('account_id')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                        Save
                    </button>
                    <a href="{{ route('transactions.index') }}" class="btn btn-secondary waves-effect waves-light">
                        Cancel
                    </a>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- end col -->

</div>
<!-- end row -->
</div>
<!-- end page content-->
@endsection
