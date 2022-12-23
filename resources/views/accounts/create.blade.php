@extends('layouts.master') @section('title','Create Account')
@section('breadcrumbs')
<div class="page-title-box">
    <h4 class="page-title">Accounts</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">2021110031</a></li>
        <li class="breadcrumb-item"><a href="{{ route('accounts.index') }}">Accounts</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
</div>
@endsection @section('page-content-wrapper')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Create Account</h4>
                    <p class="text-muted m-b-30"></p>
                    <form action="{{ route('accounts.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="id" class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-4">
                                <input class="form-control @error('id') is-invalid @enderror" type="text" maxlength="16" name="id" id="id" placeholder="16 digits..." value="{{ old('id') }}" />
                                @error('id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ old('nama') }}" />
                                @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Account Type</label>
                            <div class="col-sm-4">
                                <select class="form-control" id="jenis" name="jenis" required>
                                    <option selected="selected" disabled>Select</option>
                                    <option value="Personal">Personal</option>
                                    <option value="Bisnis">Bisnis</option>
                                </select>
                                @error('jenis')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-warning waves-effect waves-light">
                                    Save
                                </button>
                                <a href="{{ route('accounts.index') }}" class="btn btn-secondary waves-effect m-l-5">
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
