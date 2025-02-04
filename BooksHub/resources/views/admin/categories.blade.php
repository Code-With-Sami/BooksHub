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
              <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
          </nav>
        </div>
      </div>
      <!--end breadcrumb-->

      <div class="row g-3 ">
        <div class="col-10">
          <div class="position-relative">
            <input class="form-control px-5" type="search" placeholder="Search Products">
            <span
              class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
          </div>
        </div>
        <div class="col-2">
          <div class="d-flex align-items-center gap-2 justify-content-lg-end">
            <a class="btn btn-primary px-4" href="{{url('create-categories')}}"><i class="bi bi-plus-lg me-2"></i>Add Product</a>
          </div>
        </div>
      </div><!--end row-->

      <div class="card mt-4">
        <div class="card-body">
          <div class="product-table">
            <div class="table-responsive white-space-nowrap">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox">
                    </th>
                    <th class="w-25">Category Name</th>
                    <th class="w-50">Description</th>
                    <th class="w-25">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>
                        <input class="form-check-input" type="checkbox">
                      </td>
                      <td>
                        <div class="d-flex align-items-center gap-3">
                          <div class="product-info">
                            <!-- <h6></h6> -->
                            <span class="product-title">{{$category->name}}</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="product-description">{{$category->description}}</p>
                      </td>
                      <td>
                      <a href="{{url('edit-categories', $category->id)}}" type="button" class="btn btn-grd btn-grd-primary px-3 mx-1">Edit</a>
                      <a href="{{url('delete-category', $category->id)}}" type="button" class="btn btn-grd btn-grd-danger px-3 mx-1">Delete</a>
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