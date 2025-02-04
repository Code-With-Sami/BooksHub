@extends('admin.master')

@section('headContent')
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BooksHub | Admin Dashboard | Books </title>
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
  <link href="{{asset('admin/assets/plugins/fancy-file-uploader/fancy_fileupload.css')}}" rel="stylesheet">
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
					<div class="breadcrumb-title pe-3">Categories</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
        <form action="{{ url('storecategories') }}" method="POST">
            @csrf
        <div class="row">
          <div class="col-12 col-lg-8">
              <div class="card">
                 <div class="card-body">
                   <div class="mb-4">
                      <h5 class="mb-3">Title</h5>
                      <input type="text" name="title" class="form-control" placeholder="write title here....">
                   </div>
                   <div class="mb-4">
                     <h5 class="mb-3">Description</h5>
                     <textarea class="form-control" name="description" cols="4" rows="6" placeholder="write a description here.."></textarea>
                   </div>
                </div>  
              </div>
          </div> 
          <div class="col-12 col-lg-4">
             <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center gap-3">
                    <button type="submit" class="btn btn-outline-primary flex-fill"><i class="bi bi-send me-2"></i>Publish</button>
                </div>
                </div>
             </div>
          </div>
                   
          
         </div><!--end row-->
        </form>
        
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
  <script src="{{asset('admin/assets/plugins/fancy-file-uploader/jquery.ui.widget.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/fancy-file-uploader/jquery.fileupload.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js')}}"></script>
	<script src="{{asset('admin/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js')}}"></script>
  <script>
		$('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 1000000
		});
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