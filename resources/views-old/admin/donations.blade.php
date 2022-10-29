@extends('admin.layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Donations</h1>
        </div>
    </div>
    <div class="card p-3 m-3">
        <div class="table-responsive">
            <table class="table" id="dataTable" >
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Amount</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Payment Gateway</th>
                        <th>Country</th>
                        <th>TransactionID</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1 @endphp
                    @foreach ($donations as $donation)
                    <tr>
                       <td>{{ $i++ }}</td>
                       <td><strong>₹{{ $donation->amount }}</strong></td>
                       <td>{{ $donation->name }}</td>
                       <td>{{ $donation->phone }}</td>
                       <td>{{ $donation->email }}</td>
                       <td>{{ $donation->gateway }}</td>
                       <td>{{ $donation->country }}</td>
                       <td>{{ $donation->transaction_id }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
