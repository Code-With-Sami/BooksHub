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
                <h1>Contact Us</h1>
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
                            Contact Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section Start -->
    <section class="contact-section fix section-padding">
        <div class="container">
            <div class="contact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4">
                        <div class="contact-left-items">
                            <div class="contact-info-area-2">
                                <div class="contact-info-items mb-4">
                                    <div class="icon">
                                        <i class="icon-icon-10"></i>
                                    </div>
                                    <div class="content">
                                        <p>Call Us 7/24</p>
                                        <h3>
                                            <a href="tel:+923108893412">+92 310 8893412</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info-items mb-4">
                                    <div class="icon">
                                        <i class="icon-icon-11"></i>
                                    </div>
                                    <div class="content">
                                        <p>Make a Quote</p>
                                        <h3>
                                            <a href="mailto:m.sami.developer@gmail.com">example@bookshub.com</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="contact-info-items border-none">
                                    <div class="icon">
                                        <i class="icon-icon-12"></i>
                                    </div>
                                    <div class="content">
                                        <p>Location</p>
                                        <h3>
                                            Aptech Metro Star Gate.
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-content">
                            <h2>Ready to Get Started?</h2>
                            <p>
                            Have questions, suggestions, or need assistance? Feel free to reach out to us! At BooksHub, we value your feedback and are here to help with any inquiries related to orders, book recommendations, or technical support. Contact us through our email, phone, or the contact form below, and our team will get back to you as soon as possible. Let’s stay connected and make your reading experience even better!
                            </p>
                            <form  id="contact_form"  mthod="post" class="contact-form-items">
                                @csrf
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="form-clt">
                                            <span>Your name*</span>
                                            <input type="text" name="con_fname" id="con_fname" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                        <div class="form-clt">
                                            <span>Your Email*</span>
                                            <input type="text" name="con_email" id="con_email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                        <div class="form-clt">
                                            <span>Write Message*</span>
                                            <textarea name="con_message" id="con_message"
                                                placeholder="Write Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".9s">
                                        <button type="submit" class="theme-btn" id="button" value="Send Email">
                                            Send Message <i class="fa-solid fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<< Map Section Start >>-->
    <div class="map-section">
        <div class="map-items">
            <div class="googpemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.31413512781!2d67.14924997520102!3d24.88726427791173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb339999415e0c3%3A0x36742eee0fd9c291!2sAptech%20Metro%20Star%20Gate!5e0!3m2!1sen!2s!4v1739090199484!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <!-- Email Js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
    <script type="text/javascript">
        const btn = document.getElementById('button');

document.getElementById('contact_form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Sending...';

   const serviceID = 'service_fk7jcim';
   const templateID = 'template_am0zlxs';

   emailjs.sendForm(service_fk7jcim, template_am0zlxs, this)
    .then(() => {
      btn.value = 'Send Email';
      alert('Sent!');
    }, (err) => {
      btn.value = 'Send Email';
      alert(JSON.stringify(err));
    });
});
    </script>
@endsection