@extends('master')

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="page-heading">
            <h1>Shopping Cart</h1>
            <div class="page-header">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Cart Section Start -->
<section class="cart-section section-padding">
    <div class="container">
        <div class="main-cart-wrapper">
            <div class="row g-5">
                <div class="col-xl-9">
                    <div class="table-responsive">
                        @php $subtotal = 0; @endphp <!-- ✅ Always initialize subtotal -->

                        @if(empty($cart) || count($cart) == 0)
                            <p>Your cart is empty.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Book Title</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $book_id => $item)
                                        @php 
                                            $itemTotal = $item['price'] * $item['quantity']; 
                                            $subtotal += $itemTotal;
                                        @endphp
                                        <tr>
                                            <td>{{ $item['title'] }}</td>
                                            <td>{{ $item['quantity'] }}</td>
                                            <td>${{ number_format($item['price'], 2) }}</td>
                                            <td>${{ number_format($itemTotal, 2) }}</td>
                                            <td>
                                                <form action="{{ route('cart.remove', $book_id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit">Remove</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <form action="{{ route('cart.clear') }}" method="POST" style="display:inline;">
                                @csrf
                                <button type="submit">Clear Cart</button>
                            </form>
                        @endif
                    </div>
                </div>

                <!-- Cart Total Section -->
                <div class="col-xl-3">
                    <div class="table-responsive cart-total">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Cart Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="d-flex gap-5 align-items-center justify-content-between">
                                            <span class="sub-title">Subtotal:</span>
                                            <span class="sub-price">${{ number_format($subtotal, 2) }}</span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="d-flex gap-5 align-items-center justify-content-between">
                                            <span class="sub-title">Shipping:</span>
                                            @php $shipping = ($subtotal > 50) ? 0 : 5; @endphp
                                            <span class="sub-text">{{ $shipping == 0 ? 'Free' : '$' . number_format($shipping, 2) }}</span>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @php $total = $subtotal + $shipping; @endphp
                                        <span class="d-flex gap-5 align-items-center justify-content-between">
                                            <span class="sub-title">Total:</span>
                                            <span class="sub-price sub-price-total">${{ number_format($total, 2) }}</span>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @if(!empty($cart) && count($cart) > 0)
                            <a href="{{ route('checkout.index') }}" class="theme-btn">Proceed to checkout</a>
                        @endif
                    </div>
                </div>
                <!-- End Cart Total Section -->
            </div>
        </div>
    </div>
</section>
@endsection
