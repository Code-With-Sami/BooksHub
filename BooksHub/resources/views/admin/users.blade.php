@extends('admin.master')

@section('headContent')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BooksHub | Admin Dashboard | Users </title>
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
  <link href="{{('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
  <!--main css-->
  <link href="{{('admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet">
  <link href="{{('admin/sass/main.css')}}" rel="stylesheet">
  <link href="{{('admin/sass/dark-theme.css')}}" rel="stylesheet">
  <link href="{{('admin/sass/blue-theme.css')}}" rel="stylesheet">
  <link href="{{('admin/sass/semi-dark.css')}}" rel="stylesheet">
  <link href="{{('admin/sass/bordered-theme.css')}}" rel="stylesheet">
  <link href="{{('admin/sass/responsive.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Users</li>
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
				<hr>
				<div class="card my-5">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Phone No.</th>
										<th>Email</th>
										<th>Date Of Birth</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)
									<tr>
										<td>{{$user->id}}</td>
										<td>{{$user->firstName}}</td>
										<td>{{$user->lastName}}</td>
										<td>{{$user->phoneNum}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->dob}}</td>
										<td>{{$user->address}}</td>
										<td class="d-flex gap-2">
										<a href="{{url('edit-users', $user->id)}}" class="btn btn-outline-warning d-flex gap-1"><i class="material-icons-outlined">edit</i></a>
										<a href="{{url('delete-users', $user->id)}}" class="btn btn-outline-danger d-flex gap-1"><i class="material-icons-outlined">delete</i></a>
										</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot>
									<tr>
										<th>ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Phone No.</th>
										<th>Email</th>
										<th>Date Of Birth</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>


    </div>
@endsection

@section('scriptLinks')
<!--bootstrap js-->
<script src="{{('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

<!--plugins-->
<script src="{{('admin/assets/js/jquery.min.js')}}"></script>
<!--plugins-->
<script src="{{('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{('admin/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
<script src="{{('admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script>
	  $(document).ready(function() {
		  $('#example').DataTable();
		} );
  </script>
  <script>
	  $(document).ready(function() {
		  var table = $('#example2').DataTable( {
			  lengthChange: false,
			  buttons: [ 'copy', 'excel', 'pdf', 'print']
		  } );
	   
		  table.buttons().container()
			  .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
	  } );
  </script>
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