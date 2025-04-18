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
                <h1>About Us</h1>
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
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                            BooksHub is more than just an e-book store—it’s a community for passionate readers. The website is designed to enhance the reading experience with interactive features, personalized recommendations, and a responsive design that works across all devices.
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                            BooksHub is an innovative online e-book platform designed to make reading more accessible and enjoyable. It offers a vast collection of digital books across multiple genres, catering to book lovers of all interests. Whether you are into fiction, self-improvement, education, or technology, BooksHub provides a seamless browsing and purchasing experience. With a well-structured interface, users can easily search for books, add them to their library, and enjoy reading anytime, anywhere.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                            The platform is built with efficiency in mind, featuring a robust order management system that ensures smooth transactions and secure purchases. Users can track their orders, manage their book collections, and access their purchased e-books with ease. For admins, BooksHub provides a streamlined dashboard to manage books, orders, and user activities, making the platform both user- and admin-friendly.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                            BooksHub is more than just an e-book store—it’s a community for passionate readers. The website is designed to enhance the reading experience with interactive features, personalized recommendations, and a responsive design that works across all devices.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="{{asset('assets/users/assets/img/about.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section Start -->
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
                    <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".3s">Get 25% discount in all <br> kind of
                        super Selling</h2>
                    <a href="{{url('shop')}}" class="theme-btn white-bg wow fadeInUp" data-wow-delay=".5s">Shop Now <i
                            class="fa-solid fa-arrow-right-long"></i></a>
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

@endsection