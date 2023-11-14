@extends('layouts.admin');

@section('content')

<div class="container mt-5">
    @if (\Session::has('update'))
        <div class="alert alert-success">
            <p>{!! \Session::get('update') !!}</p>
        </div>
    @endif
</div>

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mb-5 d-inline">Orders</h5>
                <div class="table-responsive mt-5">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Country</th>
                                <th scope="col">Order Notes</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price in USD</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allOrders as $order)
                            <tr>
                                <th scope="row">{{ $order->id }}</th>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->last_name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->state }}</td>
                                <td>{{ $order->order_notes }}</td>
                                <td>{{ $order->status }}</td>
                                <td>{{ $order->price }}</td>
                                <td>
                                    @if($order->paid)
                                    paid
                                    @else
                                    not paid yet
                                    @endif
                                </td>
                                <td>{{ $order->created_at }}</td>
                                <td>
                                    @if($order->paid)
                                    <a href="{{ route('orders.edit', $order->id) }}"
                                        class="btn btn-warning text-white mb-4 text-center" style="background-color: #7b940e; border-color: #7b940e">
                                        Update Status
                                    </a>
                                    @else
                                    <button class="btn btn-warning text-white mb-4 text-center" style="background-color: #7b940e; border-color: #7b940e" disabled>
                                        Update Status
                                    </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
