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
    <h2 class="mb-4">Order Details - #{{ $order->id }}</h2>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Order Tracking</h5>
            <p><strong>Status:</strong> <span class="badge bg-primary">{{ $order->status }}</span></p>
            <p><strong>Payment:</strong> <span class="badge bg-success">{{ $order->payment_status }}</span></p>
            <p><strong>Shipping Address:</strong> {{ $order->shipping_address }}</p>
            <p><strong>Order Date:</strong> {{ $order->created_at->format('d M Y') }}</p>
        </div>
    </div>

    <h4 class="mt-4">Order Items</h4>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Book Title</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php $subtotal = 0; @endphp
            @foreach ($order->items as $item)
                @php 
                    $itemTotal = $item->price * $item->quantity;
                    $subtotal += $itemTotal;
                @endphp
                <tr>
                    <td>{{ $item->book->title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>${{ number_format($itemTotal, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        <p class="fw-bold">Subtotal:</p>
        <p class="fw-bold">${{ number_format($subtotal, 2) }}</p>
    </div>
    <div class="d-flex justify-content-between">
        <p class="fw-bold">Shipping:</p>
        <p class="fw-bold">${{ number_format($order->shipping_cost, 2) }}</p>
    </div>
    <div class="d-flex justify-content-between border-top pt-3">
        <h5 class="fw-bold">Total:</h5>
        <h5 class="fw-bold">${{ number_format($order->total_price, 2) }}</h5>
    </div>
</div>    

@endsection