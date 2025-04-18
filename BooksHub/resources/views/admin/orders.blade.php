@extends('admin.master')

@section('headContent')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BooksHub | Admin Dashboard | Orders </title>
  <!--favicon-->
  <link rel="icon" href="{{asset('admin/assets/images/BooksHubLogoPortrait1.png')}}" type="image/png')}}">
  <!-- loader-->
  <link href="{{('admin/assets/css/pace.min.css')}}" rel="stylesheet">
  <script src="{{('admin/assets/js/pace.min.js')}}"></script>

  <!--plugins-->
  <link href="{{('admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{('admin/assets/plugins/metismenu/metisMenu.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{('admin/assets/plugins/metismenu/mm-vertical.css')}}">
  <link rel="stylesheet" type="text/css" href="{{('admin/assets/plugins/simplebar/css/simplebar.css')}}">
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
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Components</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Products</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->


        <div class="row g-3">
          <div class="col-12 mt-4">
            <div class="position-relative">
              <input class="form-control px-5 " type="search" placeholder="Search Customers">
              <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
            </div>
          </div>
        </div><!--end row-->

        <div class="card mt-4">
          <div class="card-body">
            <div class="customer-table">
              <div class="table-responsive white-space-nowrap">
                 <table class="table align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Order Id</th>
                      <th>Customer</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Payment Status</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                   </thead>
                   <tbody>
                   @foreach ($orders as $order)
                    <tr>
                    <td>
                        <a href="javascript:;">#{{ $order->id }}</a>
                    </td>
                    <td>
                        <p class="mb-0 customer-name fw-bold">{{ $order->user->firstName }}</p>
                    </td>
                    <td>${{ number_format($order->total_price, 2) }}</td>
                    <td><span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $order->status }}<i class="bi bi-check2 ms-2"></i></span></td>
                    <td><span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">{{ $order->payment_status }}<i class="bi bi-x-lg ms-2"></i></span></td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ url('/admin-orderdetails/' . $order->id) }}">View</a></li>
                          <li><a class="dropdown-item" href="{{ url('/admin-orders/' . $order->id) }}">Delete</a></li>
                        </ul>
                      </div>
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

@section('scriptLinks')
<!--start switcher-->

  <!--bootstrap js-->
  <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

  <!--plugins-->
  <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/main.js')}}"></script>

  <script src="{{('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{('admin/assets/js/main.js')}}"></script>
<script>
  $(".data-attributes span").peity("donut")
</script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard1.js')}}"></script>
<script>
   new PerfectScrollbar(".user-list")
</script>
@endsection