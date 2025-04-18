
@extends('master')
@section('content')
<style>
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border-radius: 10px;
            width: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            animation: slideIn 0.3s ease-in-out;
        }
        .close {
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .button01 {
            background: #012E4A;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            width: 100%;
        }
        .button01:hover {
            background: #036280;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
</style>

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
                <h1>Competetion</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Competetion
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>






   <!-- Winner Section start  -->
   <section class="news-section fix section-padding section-bg" style="margin-top:130px;">
    <div class="container">
        <div class="section-title text-center align-items-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Ongoing Competitions</h2>
            <p class="wow fadeInUp w-50  mx-auto" data-wow-delay=".5s">Welcome to our Competitions Page, where creativity meets opportunity! Participate in our exciting essay writing and story competitions for a chance to win prizes and get featured in our next journal.
            </p>
        </div>
        <div class="row">
            @foreach($competitions as $competition)
                <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items" style="margin-top: 105px">
                    <div class="news-content">
                        <h3>{{ $competition->title }}</h3>
                        <p>{{ $competition->description }}</p>
                        <ul>
                            <li>
                                <i class="fa-light fa-calendar-days"></i>
                                Ends At: {{ $competition->end_time }}
                            </li> 
                        </ul>
                        <a href="{{ url('competitions-show', $competition->id) }}" class="theme-btn-2">View Details <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>

    <!-- Team Section start  -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container mt-5">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Participatian Of Competetion</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('assets/users/assets/img/team/01.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/users/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Esther Howard</a></h6>
                                <p>10 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('assets/users/assets/img/team/02.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/users/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Shikhon Islam</a></h6>
                                <p>07 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('assets/users/assets/img/team/03.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/users/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Kawser Ahmed</a></h6>
                                <p>04 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('assets/users/assets/img/team/04.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/users/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Brooklyn Simmons</a></h6>
                                <p>15 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('assets/users/assets/img/team/05.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/users/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Leslie Alexander</a></h6>
                                <p>05 Published Books</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-box-items">
                            <div class="team-image">
                                <div class="thumb">
                                    <img src="{{asset('assets/users/assets/img/team/06.jpg')}}" alt="img">
                                </div>
                                <div class="shape-img">
                                    <img src="{{asset('assets/users/assets/img/team/shape-img.png')}}" alt="img">
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h6><a href="team-details.html">Guy Hawkins</a></h6>
                                <p>12 Published Books</p>
                            </div>
                        </div>
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
                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                        class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-content">
                                <div class="section-title">
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">How To Participate</h2>
                                </div>
                                <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                    <ul>
                                        <li>Essay Writing Competition</li>
                                        <li class="h4">Rules & Guidelines:</li>
                                        <p>Only registered users can participate.
                                            A new topic will be displayed when you access the competition page.
                                            A 3-hour countdown timer will start automatically once the page is accessed.
                                            If you don’t submit within 3 hours, your entry will be automatically disqualified.</p></ul>
                                        <ul class="h4">Submission Process:</ul>
                                        <li>Read the given topic carefully.</li>
                                        <li>Write your essay (save as a .doc, .docx, or .pdf file).</li>
                                        <li>Click the Upload Submission button.</li>
                                        <li>Submission Confirmation: After uploading, you will receive a confirmation email and a submission status update in your account.</li>
                                    </ul>
                                </p>

                                <button class="button01" onclick="openModal()">Participate Now</button>

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
                    <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".3s">Get 50000$ CashPrice <br> On Achive 1<sup>st</sup> Postion</h2>
                    <a class="theme-btn white-bg wow fadeInUp" data-wow-delay=".5s"  onclick="openModal()">Participate Now<i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>


@endsection
