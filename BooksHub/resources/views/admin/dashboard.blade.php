@extends('admin.master')

@section('headContent')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BooksHub | Admin Dashboard</title>
  <!--favicon-->
  <link rel="icon" href="{{asset('admin/assets/images/BooksHubLogoPortrait1.png')}}" type="image/png')}}">
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
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Dashboard</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Analysis</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-outline-primary">Settings</button>
							<button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
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
     
        <div class="row">
          <div class="col-xl-6 col-xxl-4 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-header border-0 p-3 border-bottom">
                <div class="d-flex align-items-start justify-content-between">
                  <div class="">
                    <h5 class="mb-0">New Users</h5>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle" data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
              <div class="user-list p-3">
              <div class="d-flex flex-column gap-3">
              @foreach ($users as $user)
              <div class="d-flex align-items-center gap-3">
                <div class="flex-grow-1">
                    <h6 class="mb-0">{{ $user->firstName }}</h6>
                    <p class="mb-0">{{ $user->lastName }}</p>
                </div>
                <div class="flex-grow-1">
                    <h6 class="mb-0">{{ $user->email }}</h6>
                    <p class="mb-0">{{ $user->phoneNum }}</p>
                </div>
                <div class="form-check form-check-inline me-0">
                    <input class="form-check-input ms-0" type="checkbox">
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
              <div class="card-footer bg-transparent p-3">
                <div class="d-flex align-items-center justify-content-between gap-3">
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">share</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">textsms</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">email</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">attach_file</i></a>
                  <a href="javascript:;" class="sharelink"><i class="material-icons-outlined">event</i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-xxl-8 d-flex align-items-stretch">
            <div class="card w-100 rounded-4">
              <div class="card-body">
               <div class="d-flex align-items-start justify-content-between mb-3">
                  <div class="">
                    <h5 class="mb-0">Recent Orders</h5>
                  </div>
                  <div class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="order-search position-relative my-3">
                  <input class="form-control rounded-5 px-5" type="text" placeholder="Search">
                  <span class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50">search</span>
                </div>
                 <div class="table-responsive">
                     <table class="table align-middle">
                       <thead>
                        <tr>
                          <th>Item Name</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Payment Status</th>
                          <th>Rating</th>
                        </tr>
                       </thead>
                       <tbody>
    @foreach ($orders as $order)
        <tr>
            <td>
                <div class="d-flex align-items-center gap-3">
                    <p class="mb-0">{{ $order->user->firstName }}</p>
                </div>
            </td>
            <td>Rs: {{ number_format($order->total_price, 2) }}</td>
            <td>{{ $order->status }}</td>
            <td>
                @if($order->payment_status == 'Completed')
                    <p class="dash-lable mb-0 bg-success bg-opacity-10 text-success rounded-2">Completed</p>
                @elseif($order->payment_status == 'Pending')
                    <p class="dash-lable mb-0 bg-warning bg-opacity-10 text-warning rounded-2">Pending</p>
                @elseif($order->payment_status == 'Canceled')
                    <p class="dash-lable mb-0 bg-danger bg-opacity-10 text-danger rounded-2">Canceled</p>
                @endif
            </td>
            <td>
                <div class="d-flex align-items-center gap-1">
                    <p class="mb-0">{{ $order->rating }}</p>
                    <i class="material-icons-outlined text-warning fs-6">star</i>
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
<!-- Row End -->

<!-- New Row -->
<div class="card mt-4">
        <div class="card-body">
          <div class="product-table">
            <div class="table-responsive white-space-nowrap">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Img</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Format</th>
                    <th>Quantity</th>
                    <th>Lan</th>
                    <th>Pages</th>
                    <th>Pulication_date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($books as $book)
                    <tr>
                    <td>
                        <a class="d-flex align-items-center gap-3">
                          <div class="customer-pic">
                            <img src="{{asset('booksImages/'.$book->cover_image)}}" class="rounded-circle" width="35" height="35" alt="">
                          </div>
                        </a>
                    </td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->category->name}}</td>
                    <td>{{ Str::limit($book->description, 100, '...') }}</td>
                    <td>{{ intval($book->price) }}</td>
                    <td>{{$book->format}}</td>
                    <td>{{$book->stock_quantity}}</td>
                    <td>{{$book->language}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->publication_date}}</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret" type="button" data-bs-toggle="dropdown">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{url('edit-books', $book->id)}}">Edit</a></li>
                          <li><a class="dropdown-item" href="{{url('delete-books', $book->id)}}">Delete</a></li>
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