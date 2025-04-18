@extends('admin.master')

@section('headContent')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BooksHub | Admin Dashboard | Users | Create User</title>
  <!--favicon-->
	<link rel="icon" href="{{asset('admin/assets/images/favicon-32x32.png')}}" type="image/png">
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
					<div class="breadcrumb-title pe-3">Users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit User</li>
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
      
        <!-- row start -->
        <div class="row">
					<div class="col-xl-12 mx-auto">
            <div class="card p-3 my-5">
            <form class="row g-3 needs-validation" action="{{ route('updateusers', $users->id) }}" method="POST" novalidate>
                  @csrf 
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">First Name</label>
										<input type="text" name="firstName" value="{{$users->firstName}}" class="form-control" id="bsValidation1" placeholder="First Name" required>
										<div class="valid-feedback">
											Looks good.
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Last Name</label>
										<input type="text" name="lastName" value="{{$users->lastName}}" class="form-control" id="bsValidation2" placeholder="Last Name" required>
										<div class="invalid-feedback">
											Looks good.
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation3" class="form-label">Phone</label>
										<input type="text" name="phoneNum" value="{{$users->phoneNum}}" class="form-control" id="bsValidation3" placeholder="Phone" required>
										<div class="invalid-feedback">
											Looks good.
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation4" class="form-label">Email</label>
										<input type="email" name="email" value="{{$users->email}}" class="form-control" id="bsValidation4" placeholder="Email" required>
										<div class="invalid-feedback">
											Looks good.
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation8" class="form-label">Date Of Birth</label>
										<input type="date" name="dob" value="{{$users->dob}}" class="form-control" id="bsValidation8" required>
										<div class="invalid-feedback">
											Looks good.
										</div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation9" class="form-label">Country</label>
										<input type="text" name="country" value="{{$users->country}}" class="form-control" id="bsValidation9" placeholder="Country" required>
										<div class="invalid-feedback">
										   Looks good.
										</div>
									</div>
									
									<div class="col-md-6">
										<label for="bsValidation10" class="form-label">City</label>
										<input type="text" name="city" value="{{$users->city}}" class="form-control" id="bsValidation10" placeholder="City" required>
										<div class="invalid-feedback">
											loooks good.
										</div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea class="form-control" name="address"  id="bsValidation13" placeholder="Address ..." rows="1" required>{{$users->address}}</textarea>
										<div class="invalid-feedback">
											Looks good.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn w-50 btn-grd-primary px-4">Submit</button>
											<button type="reset" class="btn w-50 btn-grd-info px-4">Reset</button>
										</div>
									</div>
								</form>
            </div>
					</div>
				</div>
				<!--end row-->

    </div>
@endsection

@section('scriptLinks')
  <script src="{{asset('admin/assets/js/bootstrap.bundle.min.js')}}"></script>

  <!--plugins-->
  <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
  <!--plugins-->
  <script src="{{asset('admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('admin/assets/plugins/validation/jquery.validate.min.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/validation/validation-script.js')}}"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>
  <script src="{{asset('admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/main.js')}}"></script>
  <script>
  $(".data-attributes span").peity("donut")
</script>
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard1.js')}}"></script>
<script>
   new PerfectScrollbar(".user-list")
</script>
@endsection