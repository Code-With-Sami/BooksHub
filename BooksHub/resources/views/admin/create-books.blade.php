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
					<div class="breadcrumb-title pe-3">Books</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Book</li>
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
        <form action="{{url('storebooks')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-12 col-lg-8">
              <div class="card">
                 <div class="card-body">
                   <div class="mb-4">
                      <h5 class="mb-3">Book Title</h5>
                      <input type="text" name="title" class="form-control" placeholder="write title here....">
                   </div>
                   <div class="mb-4">
                     <h5 class="mb-3">Book Description</h5>
                     <textarea class="form-control" name="description" cols="4" rows="6" placeholder="write a description here.."></textarea>
                   </div>
                   <div class="mb-4">
                    <h5 class="mb-3">Book Image</h5>
                    <input id="fancy-file-upload" type="file" name="cover_img" accept=".jpg, .png, image/jpeg, image/png">
                  </div>
                  <div class="mb-4">
                    <h5 class="mb-3">Inventory</h5>
                    
                    <div class="row g-3">
                      <div class="col-12 col-lg-3">
                        <div class="nav flex-column nav-pills border rounded vertical-pills overflow-hidden">
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Pricing" type="button"><i class="bi bi-tag-fill me-2"></i>Pricing</button>
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Stock" type="button"><i class="bi bi-box-seam-fill me-2"></i>Stock</button>
                          <button class="nav-link active px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Shipping" type="button"><i class="bi bi-truck-front-fill me-2"></i>Shipping</button>
                          <button class="nav-link px-4 rounded-0" data-bs-toggle="pill" data-bs-target="#Advanced" type="button"><i class="bi bi-handbag-fill me-2"></i>Advanced</button>
                        </div>
                      </div>
                      <div class="col-12 col-lg-9">
                        <div class="tab-content">
                          <div class="tab-pane fade" id="Pricing">
                            <div class="row g-3">
                              <div class="col-12 col-lg-12">
                                <h6 class="mb-2">Price</h6>
                                <input class="form-control" type="number" name="price" placeholder="$$$">
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Stock">
                            <h6 class="mb-3">Add Stock</h6>
                            <div class="row g-3">
                              <div class="col-sm-12">
                                <input class="form-control" type="number" name="stock_quantity" placeholder="Quantity">
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade show active" id="Shipping">
                            <div class="d-flex flex-column h-100">
                              <h6 class="mb-3">Shipping Type</h6>
                              <div class="flex-1">
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked">
                                    <label class="form-check-label fw-bold d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Admin <span class="badge bg-warning text-dark ms-2">Recommended</span></label></div>
                                  <div class="ps-4">
                                    <p class="mb-0">Your product, Our responsibility.<br>For a measly fee, we will handle the delivery process for you.</p>
                                  </div>
                                </div>
                              </div>
                              <p class="fs--1 fw-semi-bold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Advanced">
                            <h6 class="mb-3">Advanced</h6>
                            <div class="row g-3 mb-3">
                              <div class="col-12 col-lg-6">
                                <label class="mb-2">Book ID Type</label>
                                <select class="form-select">
                                  <option selected="selected">ISBN</option>
                                  <option value="1">UPC</option>
                                  <option value="2">EAN</option>
                                  <option value="3">JAN</option>
                                </select>
                              </div>
                              <div class="col-12 col-lg-6">
                                <label class="mb-2">Book ID</label>
                                <input class="form-control" type="text" name="isbn" placeholder="ISBN Number">
                              </div>
                            </div>
                            <div class="row g-3">
                              <div class="col-12 col-lg-12">
                                <h6>Upload Book</h6>
                                <input id="fancy-file-upload" type="file" name="file_url" accept=".pdf">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>
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
              <div class="card">
                <div class="card-body">
                   <h5 class="mb-3">Organize</h5>
                      <div class="row g-3">
                          <div class="col-12">
                            <label for="Collection" class="form-label">Author</label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Author">
                          </div>
                          <div class="col-12">
                            <label for="AddCategory" class="form-label">Category</label>
                            <select class="form-select" name="category_id" id="AddCategory">
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-12">
                            <label for="format" class="form-label">Format</label>
                            <select class="form-select" name="format" id="format">
                              <option value="Soft-Copy">Soft Copy</option>
                              <option value="Hard-Copy">Hard Copy</option>
                              <option value="CD">CD</option>
                            </select>
                          </div>
                        </div><!--end row-->
                     </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-3">Additional</h5>
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="language" class="form-label">language</label>
                        <input type="text" name="language" class="form-control" id="language" placeholder="language">
                       </div>
                      <div class="col-12">
                        <label for="pages" class="form-label">Pages</label>
                        <input type="text" name="pages" class="form-control" id="pages" placeholder="pages">
                       </div>
                       <div class="col-12">
                        <label for="publicationDate" class="form-label">Publication Date</label>
                        <input type="date" name="publication_date" class="form-control" id="publicationDate">
                       </div>
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