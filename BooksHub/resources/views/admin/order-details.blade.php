@extends('admin.master')

@section('headContent')
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BooksHub | Admin Dashboard | Order Details</title>
<!-- Favicon -->
<link rel="icon" href="{{ asset('admin/assets/images/BooksHubLogoPortrait1.png') }}" type="image/png">
<!-- loader-->
<link href="{{asset('admin/assets/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('admin/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{asset('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/metismenu/mm-vertical.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/plugins/simplebar/css/simplebar.css')}}">
  <!--bootstrap css-->
  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{asset('admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{asset('admin/sass/main.css')}}" rel="stylesheet">
  <link href="{{asset('admin/sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{asset('admin/sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{asset('admin/sass/semi-dark.css')}}" rel="stylesheet">
  <link href="{{asset('admin/sass/bordered-theme.css')}}" rel="stylesheet">
  <link href="{{asset('admin/sass/responsive.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="main-content">
    <!-- Breadcrumb -->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Orders</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ url('admin-dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Order Details Card -->
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="fw-bold">Order #{{ $order->id }}</h4>
                    <p class="mb-0">Customer ID: <a href="javascript:;">{{ $order->user_id }}</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Items -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3 fw-bold">Order Items</h5>
                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead class="table-light">
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
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="fw-bold">Items Subtotal:</p>
                        <p class="fw-bold">${{ number_format($subtotal, 2) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 fw-bold">Summary</h4>
                    <div>
                        <div class="d-flex justify-content-between">
                            <p class="fw-semi-bold">Subtotal:</p>
                            <p class="fw-semi-bold">${{ number_format($subtotal, 2) }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="fw-semi-bold">Shipping Cost:</p>
                            <p class="fw-semi-bold">${{ number_format($order->shipping_cost, 2) }}</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between border-top pt-4">
                        <h5 class="mb-0 fw-bold">Total:</h5>
                        <h5 class="mb-0 fw-bold">${{ number_format($order->total_price, 2) }}</h5>
                    </div>
                </div>
            </div>

            <!-- Order Status Update -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 fw-bold">Order Status</h4>
                    <form action="{{ route('admin.orders.update', $order->id) }}" method="POST">
    @csrf
    @method('PATCH')  <!-- This ensures Laravel knows it's an update request -->

    <label class="form-label">Order Status</label>
    <select class="form-select mb-4" name="status">
        <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>Processing</option>
        <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped</option>
        <option value="Delivered" {{ $order->status == 'Delivered' ? 'selected' : '' }}>Delivered</option>
    </select>

    <label class="form-label">Payment Status</label>
    <select class="form-select mb-4" name="payment_status">
        <option value="Pending" {{ $order->payment_status == 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Paid" {{ $order->payment_status == 'Paid' ? 'selected' : '' }}>Paid</option>
        <option value="Failed" {{ $order->payment_status == 'Failed' ? 'selected' : '' }}>Failed</option>
    </select>

    <button type="submit" class="btn btn-primary">Update Order</button>
</form>
                </div>
            </div>
        </div>
    </div>

    <!-- Billing Details -->
    <h5 class="fw-bold mb-4">Billing Details</h5>
    <div class="card">
        <div class="card-body">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="d-flex align-items-start gap-3 border p-3 rounded">
                        <i class="bi bi-person-circle fs-5"></i>
                        <div>
                            <p class="fw-bold mb-1">Customer Name</p>
                            <p class="mb-0">{{ $order->user->firstName }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start gap-3 border p-3 rounded">
                        <i class="bi bi-envelope-fill fs-5"></i>
                        <div>
                            <p class="fw-bold mb-1">Email</p>
                            <p class="mb-0">{{ $order->user->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start gap-3 border p-3 rounded">
                        <i class="bi bi-telephone-fill fs-5"></i>
                        <div>
                            <p class="fw-bold mb-1">Phone</p>
                            <p class="mb-0">{{ $order->user->phoneNum }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-start gap-3 border p-3 rounded">
                        <i class="bi bi-house-door-fill fs-5"></i>
                        <div>
                            <p class="fw-bold mb-1">Shipping Address</p>
                            <p class="mb-0">{{ $order->shipping_address }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('scriptLinks')
<!--bootstrap js-->
<script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

<!--plugins-->
<script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
<!--plugins-->
<script src="{{asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/peity/jquery.peity.min.js')}}"></script>
<script>
  $(".data-attributes span").peity("donut")
</script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard1.js')}}"></script>
<script>
   new PerfectScrollbar(".user-list")
</script>
@endsection
