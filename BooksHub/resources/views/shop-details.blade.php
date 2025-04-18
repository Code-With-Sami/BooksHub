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
                <h1>{{$book->title}}</h1>
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
                            {{$book->title}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
        <div class="container">
            <div class="shop-details-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-5">
                        <div class="shop-details-image">
                            <div class="tab-content">
                                <div id="thumb1" class="tab-pane fade show active">
                                    <div class="shop-details-thumb">
                                        <img src="{{ asset('booksImages/'.$book->cover_image) }}" alt="{{ $book->title }}" height="400">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="shop-details-content">
                            <div class="title-wrapper">
                                <h2>{{$book->title}}</h2>
                            </div>
                            <p>
                                {{$book->description}}
                            </p>
                            <div class="price-list">
                                <h3>Rs: {{intval($book->price)}}</h3>
                            </div>
                            <div class="cart-wrapper">
                                <div class="quantity-basket">
                                    <p class="qty">
                                        <button class="qtyminus" aria-hidden="true">−</button>
                                        <input type="number" name="qty" id="qty2" min="1" max="10" step="1" value="1">
                                        <button class="qtyplus" aria-hidden="true">+</button>
                                    </p>
                                </div> 
                                <button type="button"  class="theme-btn style-2" data-bs-toggle="modal" data-bs-target="#readMoreModal">
                                    <a href="{{ route('cart.add', $book->id) }}">Add to cart</a>
                                </button>
                            </div>
                            <div class="category-box">
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <span>Category:</span> {{$book->category->name}}
                                        </li>
                                        <li>
                                            <span>Format:</span> {{$book->format}}
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Author:</span> {{$book->author}}
                                        </li>
                                        <li>
                                            <span>Total pages:</span> {{$book->pages}}
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <span>Language:</span> {{$book->language}}
                                        </li>
                                        <li>
                                            <span>ISBN:</span> {{$book->isbn}}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                                aria-selected="true" role="tab">
                                <h6>Description</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Additional Information </h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p>
                                   {{$book->description}}
                                </p>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-1">Availability</td>
                                            <td class="text-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Stock quantity</td>
                                            <td class="text-2">{{$book->stock_quantity}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Categories</td>
                                            <td class="text-2">{{$book->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Author</td>
                                            <td class="text-2">{{$book->author}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Publish Date</td>
                                            <td class="text-2">{{$book->publication_date}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Total Page</td>
                                            <td class="text-2">{{$book->pages}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Format</td>
                                            <td class="text-2">{{$book->format}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Language</td>
                                            <td class="text-2">{{$book->language}}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">ISBN NUM</td>
                                            <td class="text-2">{{$book->isbn}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section Start -->
    <section class="top-ratting-book-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Related Products</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                Discover a curated selection of related books tailored to your interests and reading preferences!
                </p>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @foreach($relatedBooks as $related)
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="{{ url('shop-details', $related->id) }}"><img src="{{ asset('booksImages/'.$related->cover_image) }}" alt="{{$related->title}}"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="{{ route('cart.add', $book->id) }}"><i class="far fa-heart"></i></a>
                                    </li>
                                </ul>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="{{ route('cart.add', $book->id) }}"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{ url('shop-details/'.$related->id) }}"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> {{$related->category->name}} </h5>
                                <h3><a href="shop-details.html">{{$related->title}}</a></h3>
                                <ul class="price-list">
                                    <li>Rs: {{intval($related->price)}}</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="content">{{$related->author}}</span>
                                    </li>

                                    <li class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-button">
                                <a href="{{ url('shop-details/'.$related->id) }}" class="theme-btn"><i
                                        class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection