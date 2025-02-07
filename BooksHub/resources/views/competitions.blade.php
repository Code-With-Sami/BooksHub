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
        button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
        button:hover {
            background: #218838;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
</style>
<button onclick="openModal()">Participate Now</button>
    
<div id="participationModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Participate in the Competition</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            
            <label for="category">Competition Category:</label>
            <select id="category" name="category">
                <option value="essay">Essay Writing</option>
                <option value="story">Story Writing</option>
            </select><br><br>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
    function openModal() {
        document.getElementById("participationModal").style.display = "block";
    }
    function closeModal() {
        document.getElementById("participationModal").style.display = "none";
    }
    window.onclick = function(event) {
        let modal = document.getElementById("participationModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
   <!-- Topper Section start  -->
   <section class="news-section fix section-padding section-bg">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Our Winner </h2>
            <p class="wow fadeInUp" data-wow-delay=".5s">Our Top Scorer Of The Competion</p>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="{{asset('assets/users/assets/img/news/09.jpg')}}" alt="img">
                        <img src="{{asset('assets/users/assets/img/news/09.jpg')}}" alt="img">
                        <div class="post-box">
                            2<sup>nd</sup> Postion
                        </div>
                    </div>
                    <div class="news-content">
                        <ul>
                            <li>
                                <i class="fa-light fa-calendar-days"></i>
                                Feb 10, 2024
                            </li>
                            <li>
                                <i class="fa-regular fa-user"></i>
                                By Admin
                            </li>
                        </ul>
                        <h3><a href="news-details.html">Montes suspendisse massa curae malesuada</a></h3>
                        <a href="news-details.html" class="theme-btn-2">Read More <i
                                class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
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
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="news-card-items">
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
            </div>
        </div>
    </div>
</section>



@endsection