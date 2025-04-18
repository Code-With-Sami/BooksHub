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
					<div class="breadcrumb-title pe-3">Competitions</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Create Competition</li>
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
            <form class="row g-3 needs-validation" action="{{ route('admin.competitions.store') }}" method="POST" novalidate>
                  @csrf 
									<div class="col-md-12">
										<label for="bsValidation1" class="form-label">Title</label>
										<input type="text" name="title" class="form-control" id="bsValidation1" placeholder="Title" required>
										<div class="invalid-feedback">
											Please fill title.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Description</label>
										<textarea class="form-control" name="description" id="bsValidation13" placeholder="Description ..." rows="1" required></textarea>
										<div class="invalid-feedback">
											Please enter a valid description.
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation14" class="form-label">Category</label>
		                <select name="category" class="form-select" required>
                        <option value="Essay Writing">Essay Writing</option>
                        <option value="Storytelling">Storytelling</option>
                    </select>
                    <div class="invalid-feedback">
											Please select category.
										</div>
									</div>
                  <div class="col-md-6">
										<label for="bsValidation8" class="form-label">Start Time:</label>
										<input type="datetime-local" name="start_time" class="form-control" id="bsValidation8" required>
										<div class="invalid-feedback">
											Please enter a start time.
										</div>
									</div>
                  <div class="col-md-6">
										<label for="bsValidation8" class="form-label">End Time:</label>
										<input type="datetime-local" name="end_time" class="form-control" id="bsValidation8" required>
										<div class="invalid-feedback">
											Please enter a start time.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn w-50 btn-grd-primary px-4">Create Competition</button>
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