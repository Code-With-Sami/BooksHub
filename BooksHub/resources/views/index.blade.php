@extends('master')
@section('content')
<!-- Hero Section start  -->
<div class="hero-section hero-1 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="book-shape">
                            <img src="{{asset('assets/users/assets/img/hero/book.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape1 float-bob-x">
                            <img src="{{asset('assets/users/assets/img/hero/frame.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape2 float-bob-y">
                            <img src="{{asset('assets/users/assets/img/hero/frame-2.png')}}" alt="shape-img">
                        </div>
                        <div class="frame-shape3">
                            <img src="{{asset('assets/users/assets/img/hero/xstar.png')}}" alt="img">
                        </div>
                        <div class="frame-shape4 float-bob-x">
                            <img src="{{asset('assets/users/assets/img/hero/frame-shape.png')}}" alt="img">
                        </div>
                        <div class="bg-shape1">
                            <img src="{{asset('assets/users/assets/img/hero/bg-shape.png')}}" alt="img">
                        </div>
                        <div class="bg-shape2">
                            <img src="{{asset('assets/users/assets/img/hero/bg-shape2.png')}}" alt="shape-img">
                        </div>
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".3s">Up to 30% Off</h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">Get Your New Book <br> With The Best Price
                            </h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <a href="{{url('shop')}}" class="theme-btn">
                                    Shop Now <i class="fa-solid fa-arrow-right-long"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img class=" float-bob-x" src="{{asset('assets/users/assets/img/hero/hero-girl.png')}}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Return & refund</h3>
                        <p>Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Secure Payment</h3>
                        <p>30% off by subscribing</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Quality Support</h3>
                        <p>Always online 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Daily Offers</h3>
                        <p>20% off by subscribing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Featured Books</h2>
                </div>
                <a href="{{url('shop')}}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explore More <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @foreach($featuredBooks as $book)
                        <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="{{url('shop-details/'.$book->id)}}"><img src="{{asset('booksImages/'.$book->cover_image)}}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="{{ route('cart.add', $book->id) }}"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{url('shop-details/'.$book->id)}}"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> {{$book->category->name}} </h5>
                                <h3><a href="shop-details.html">{{$book->title}}</a></h3>
                                <ul class="price-list">
                                    <li>Rs: {{intval($book->price)}}</li>
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="content">{{$book->author}}</span>
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
                                <a href="{{ route('cart.add', $book->id) }}" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                            </div>
                        </div>
                        </div>
                    @endforeach
                
                </div>
            </div>
        </div>
    </section>

    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Categories Book</h2>
                </div>
                <div class="array-button">
                    <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                </div>
                <div class="swiper book-catagories-slider">
                    <div class="swiper-wrapper">
                    @foreach($topCategoryBooks as $book)
                        <div class="swiper-slide">
                            <div class="book-catagories-items">
                                <div class="book-thumb">
                                    <img src="{{ asset('booksImages/'.$book->cover_image) }}" alt="img" height="160">
                                    <div class="circle-shape">
                                        <img src="{{asset('assets/users/assets/img/book-categori/circle-shape.png')}}" alt="shape-img">
                                    </div>
                                </div>
                                <div class="number">{{$book->category->id}}</div>
                                <h3><a href="{{ url('shop-details/'.$book->id) }}">{{$book->category->name}}</a></h3>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="{{asset('assets/users/assets/img/about.jpg')}}" alt="img">
                            
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">About the BooksHub</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            BooksHub is an innovative online e-book platform designed to make reading more accessible and enjoyable. It offers a vast collection of digital books across multiple genres, catering to book lovers of all interests. Whether you are into fiction, self-improvement, education, or technology, BooksHub provides a seamless browsing and purchasing experience. With a well-structured interface, users can easily search for books, add them to their library, and enjoy reading anytime, anywhere.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                            The platform is built with efficiency in mind, featuring a robust order management system that ensures smooth transactions and secure purchases. Users can track their orders, manage their book collections, and access their purchased e-books with ease. For admins, BooksHub provides a streamlined dashboard to manage books, orders, and user activities, making the platform both user- and admin-friendly.
                            </p>
                            <a href="{{url('about-us')}}" class="link-btn wow fadeInUp" data-wow-delay=".8s">Overview <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url('assets/users/assets/img/cta-banner.jpg');">
                <div class="book-shape">
                    <img src="{{asset('assets/users/assets/img/book-shape.png')}}" alt="shape-img">
                </div>
                <div class="girl-shape float-bob-x">
                    <img src="{{asset('assets/users/assets/img/girl-shape-2.png')}}" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Get 25% discount
                        in all <br> kind of
                        super Selling</h2>
                    <a href="{{url('shop')}}" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section start  -->
    <section class="top-ratting-book-section fix section-padding section-bg">
        <div class="container">
            <div class="top-ratting-book-wrapper">
                <div class="section-title-area">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Top Rating Books</h2>
                    </div>
                    <a href="{{url('shop')}}" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">View More <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="row">
                    @foreach($topOrderedBooks as $book)
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="top-ratting-box-items">
                            <div class="book-thumb">
                                <a href="{{ url('shop-details/'.$book->id) }}">
                                    <img src="{{ asset('booksImages/'.$book->cover_image) }}" alt="img">
                                </a>
                            </div>
                            <div class="book-content">
                                <div class="title-header">
                                    <div>
                                        <h5>{{ $book->category->name }}</h5>
                                        <h3>
                                            <a href="{{ url('shop-details/'.$book->id) }}">{{ $book->title }}</a>
                                        </h3>
                                    </div>
                                    <ul class="shop-icon d-flex justify-content-center align-items-center">
                                        <li>
                                            <a href="{{ route('cart.add', $book->id) }}"><i class="far fa-heart"></i></a>
                                        </li>   
                                        <li>
                                            <a href="{{url('shop-details/'.$book->id)}}"><i class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span class="mt-10">Rs: {{ intval($book->price) }}</span>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="content mt-10">{{ $book->author }}</span>
                                    </li>
                                </ul>
                                <div class="shop-btn">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a href="{{ route('cart.add', $book->id) }}" class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i> Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </section>

    <!-- Winner Section start  -->
   <section class="news-section fix section-padding section-bg pt-0">
    <div class="container">
        <div class="section-title text-center w-50 mx-auto">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our Winner </h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">Welcome to our Competitions Page, where creativity meets opportunity! Participate in our exciting essay writing and story competitions for a chance to win prizes and get featured in our next journal.
            </p>
        </div>
        <div class="row">
            <div class="col-2"></div>
            @if(isset($winners) && count($winners) > 0)
            @foreach($winners as $winner)
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items" style="margin-top: 105px">
                    <div class="news-content">
                        <h3>{{ $winner->user->firstName }} won {{ $winner->competition->title }}</h3>
                        <p>Rank: {{ $winner->rank }}</p>
                        <a href="{{ asset($winner->file_path) }}" download target="_blank">View Submission</a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
                <p>No winners announced yet.</p>
            @endif
            <!-- <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{asset('assets/users/assets/img/news/10.jpg')}}" alt="img">
                        <img src="{{asset('assets/users/assets/img/news/10.jpg')}}" alt="img">
                        <div class="post-box">
                            1<sup>st</sup> Postion
                        </div>
                    </div>
                    <div class="news-content">
                        <ul>
                            <li>
                                <i class="fa-light fa-calendar-days"></i>
                                Mar 20, 2024
                            </li>
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                        </ul>
                        <h3><a href="news-details.html">Playful Picks Paradise: Kids’ Essentials with Dash.</a></h3>
                        <a href="news-details.html" class="theme-btn-2">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="news-card-items" style="margin-top: 80px">
                    <div class="news-image">
                        <img src="{{asset('assets/users/assets/img/news/11.jpg')}}" alt="img">
                        <img src="{{asset('assets/users/assets/img/news/11.jpg')}}" alt="img">
                        <div class="post-box">
                            3<sup>rd</sup> Postion
                        </div>
                    </div>
                    <div class="news-content">
                        <ul>
                            <li>
                                <i class="fa-light fa-calendar-days"></i>
                                Jun 14, 2024
                            </li>
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                        </ul>
                        <h3><a href="news-details.html">Tiny Emporium: Playful Picks for Kids’ Delightful Days.</a>
                        </h3>
                        <a href="news-details.html" class="theme-btn-2">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div> -->
            <div class="col-2"></div>
        </div>
        
    </div>
</section>

   

@endsection
