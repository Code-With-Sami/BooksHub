@extends('master')
@section('content')

<!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{asset('assets/users/assets/img/hero/book1.png')}}" alt="book">
        </div>
        <div class="book2">
            <img src="{{asset('assets/users/assets/img/hero/book2.png')}}" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Shop</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="{{url('/')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Shop
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Section Start -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-notices-wrapper wow fadeInUp" data-wow-delay=".3s">
                            <p>Showing 1-3 Of 34 Results </p>
                            <div class="form-clt">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">
                                        Default Sorting
                                    </span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected focus">
                                            Default sorting
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by popularity
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by average rating
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by latest
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Search</h5>
                                </div>
                                <form action="#" class="search-toggle-box">
                                    <div class="input-area search-container">
                                        <input class="search-input" type="text" placeholder="Search here">
                                        <button class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Categories</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    @foreach($categories as $index => $category)
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{ $index == 0 ? 'active' : '' }}" 
                                                id="pills-{{ $category->id }}-tab" 
                                                data-bs-toggle="pill" 
                                                data-bs-target="#pills-{{ $category->id }}" 
                                                type="button" role="tab" 
                                                aria-controls="pills-{{ $category->id }}" 
                                                aria-selected="{{ $index == 0 ? 'true' : 'false' }}">
                                                {{ $category->name }}
                                            </button>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            @foreach($categories as $index => $category)
                                <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}" id="pills-{{ $category->id }}" role="tabpanel"
                                aria-labelledby="pills-{{ $category->id }}-tab" >
                                <div class="row">
                                @foreach($category->books as $book)
                                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="shop-box-items">
                                            <div class="book-thumb center">
                                                <a href="{{ url('shop-details', $book->id) }}"><img src="{{ asset('booksImages/'.$book->cover_image) }}" alt="{{$book->title}}"></a>
                                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                    <li>
                                                        <a href="{{ route('cart.add', $book->id) }}"><i class="far fa-heart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ url('shop-details/'.$book->id) }}"><i class="far fa-eye"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="shop-content">
                                                <h3><a href="{{ url('shop-details/'.$book->id) }}">{{$book->title}}</a></h3>
                                                <ul class="price-list">
                                                    <li>Rs: {{intval($book->price)}}</li>
                                                    <!-- <li>
                                                        <i class="fa-solid fa-star"></i>
                                                        3.4 (25)
                                                    </li> -->
                                                </ul>
                                                <div class="shop-button">
                                                    <a href="{{ route('cart.add', $book->id) }}" class="theme-btn"><i
                                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        </div>
                                    @endforeach
                                </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="page-nav-wrap text-center">
                        {{ $books->links() }} <!-- Laravel pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
