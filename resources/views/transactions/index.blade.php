@extends('layouts.master') @section('title','Transactions List')
@section('breadcrumbs')
<div class="page-title-box">
    <h4 class="page-title">Transactions</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}">2021110031</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Transactions</a>
        </li>
        <li class="breadcrumb-item active">List</li>
    </ol>
    {{-- <div class="state-information d-none d-sm-block">
        <div class="dropdown pt-3 d-inline-block">
            <a class="btn btn-warning waves-effect waves-light" href="{{ route('transactions.create') }}" role="button">
    Create New
    </a>
</div>
</div> --}}
</div>
@endsection @section('page-content-wrapper')
<div class="page-content-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Transactions List</h4>
                    <p class="text-muted m-b-30">This is an experimental awesome solution for
                        responsive tables with complex data.</p>
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session()->get('success') }}
                        </strong>
                        You should check in on some of those fields below.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="table-rep-plugin">
                        <div class="table-responsive b-0" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table  table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th data-priority="1">Category</th>
                                        <th data-priority="1">Amount</th>
                                        <th data-priority="1">Receiver</th>
                                        <th data-priority="2">Name</th>
                                        <th data-priority="2">Update Date</th>
                                        <th data-priority="1">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($allTransactions as $transaction)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $transaction->kategori }}</td>
                                        <td>{{ number_format($transaction->nominal) }}</td>
                                        <td>{{ $transaction->tujuan }}</td>
                                        <td>{{ $transaction->account->nama }}</td>
                                        <td>{{ $transaction->updated_at }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('transactions.show', $transaction->id) }}" class="btn btn-sm btn-info">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('transactions.edit', $transaction->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST">
                                                    @csrf @method('DELETE')
                                                    <button onclick="return confirm('Are you sure delete {{ $transaction->nama }}?')" type="submit" class="btn btn-sm btn-danger">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td align="center" colspan="7">No data yet.</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
