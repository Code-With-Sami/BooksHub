@extends('master')
@section('content')
 <!-- Breadcumb Section Start -->
 <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{asset('assets/users/assets/img/hero/book1.png')}}" alt="book">
        </div>
        <div class="book2">
            <img src="{{asset('assets/users/assets/img/hero/book2.png')}}" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>All Orders</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{url('/')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Order
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
    <h2 class="mb-4">My Orders</h2>
    @if ($orders->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Payment</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>${{ number_format($order->total_price, 2) }}</td>
                        <td><span class="badge bg-primary">{{ $order->status }}</span></td>
                        <td><span class="badge bg-success">{{ $order->payment_status }}</span></td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>
                            <a href="{{ route('user.order.details', $order->id) }}" class="btn btn-sm btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No orders found.</p>
    @endif
</div>

    

@endsection