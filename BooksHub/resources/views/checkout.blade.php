@extends('master')

@section('content')
<!-- Breadcrumb Section Start -->
<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="page-heading">
            <h1>Checkout</h1>
            <div class="page-header">
                <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><i class="fa-solid fa-chevron-right"></i></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Checkout Section Start -->
<section class="checkout-section fix section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-9">
                <form action="{{ route('checkout.placeOrder') }}" method="POST">
                    @csrf
                    <div class="checkout-single-wrapper">
                        <div class="checkout-single boxshado-single">
                            <h4>Billing Details</h4>
                            <div class="checkout-single-form">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="input-single">
                                            <span>Full Name*</span>
                                            <input type="text" name="full_name" required placeholder="Enter your full name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-single">
                                            <span>Phone*</span>
                                            <input type="text" name="phone" required placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-single">
                                            <span>Email Address*</span>
                                            <input type="email" name="email" required placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-single">
                                            <span>Shipping Address*</span>
                                            <textarea name="shipping_address" required placeholder="Enter your full address"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-single">
                                            <span>Order Notes (Optional)</span>
                                            <textarea name="order_notes" placeholder="Notes about your order (optional)"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-single">
                                            <span>Payment Method*</span>
                                            <select name="payment_method" required>
                                                <option value="Credit Card">Credit Card</option>
                                                <option value="PayPal">PayPal</option>
                                                <option value="Cash on Delivery">Cash on Delivery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="theme-btn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Order Summary Section -->
            <div class="col-lg-3">
                <div class="checkout-order-area">
                    <h3>Your Order</h3>
                    <div class="product-checout-area">
                        <div class="checkout-item d-flex align-items-center justify-content-between">
                            <p>Product</p>
                            <p>Subtotal</p>
                        </div>

                        @php $subtotal = 0; @endphp 
                        @foreach ($cart as $book_id => $item)
                            @php 
                                $itemTotal = $item['price'] * $item['quantity']; 
                                $subtotal += $itemTotal;
                            @endphp
                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                <p>{{ $item['title'] }} x {{ $item['quantity'] }}</p>
                                <p>${{ number_format($itemTotal, 2) }}</p>
                            </div>
                        @endforeach

                        <div class="checkout-item d-flex align-items-center justify-content-between">
                            <p>Shipping</p>
                            @php $shipping = ($subtotal > 50) ? 0 : 5; @endphp
                            <p>{{ $shipping == 0 ? 'Free' : '$' . number_format($shipping, 2) }}</p>
                        </div>

                        <div class="checkout-item d-flex align-items-center justify-content-between">
                            <p>Total</p>
                            <p>${{ number_format($subtotal + $shipping, 2) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Order Summary Section -->
        </div>
    </div>
</section>
@endsection
