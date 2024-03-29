<!doctype html>
<html lang="en">
@include('frontend.partials._head')
<body>

@include('frontend.partials._header')


<section class="site-hero overlay" style="background-image: url({{asset ('assets-user/img/hero_1.jpg')}}">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center">
                <h1 class="heading" data-aos="fade-up">Welcome to <em>Aplikasi Tour </em></h1>
            </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
    </div>
</section>
<!-- END section -->

<section class="section visit-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="heading" data-aos="fade-right">You Can Visit</h2>
            </div>
        </div>
        <div class="row">
            @foreach($tour as $tour)
            <div class="col-lg-3 col-md-6 visit mb-3" data-aos="fade-right">
                <a href="{{route('user.detail', $tour->id)}}"><img src="{{asset ('uploads/'.$tour->gambar)}}" alt="Image placeholder"
                                               class="img-fluid"> </a>
                <h3><a href="restaurant.html">{{$tour->namatour}}</a></h3>
                <span class="">Rp.{{number_format($tour->harga)}}</span>
            </div>
                @endforeach
        </div>
    </div>
</section>
<!-- END section -->

<section class="section slider-section">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="slider-item">
                        <img src="{{asset ('assets-user/img/slider-1.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="slider-item">
                        <img src="{{asset ('assets-user/img/slider-2.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="slider-item">
                        <img src="{{asset ('assets-user/img/slider-3.jpg" alt="Image placeholder')}}" class="img-fluid">
                    </div>
                    <div class="slider-item">
                        <img src="{{asset ('assets-user/img/slider-4.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="slider-item">
                        <img src="{{asset ('assets-user/img/slider-5.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                    <div class="slider-item">
                        <img src="{{asset ('assets-user/img/slider-6.jpg')}}" alt="Image placeholder" class="img-fluid">
                    </div>
                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section>
<!-- END section -->


<footer class="section footer-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-3 mb-5">
                <ul class="list-unstyled link">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Rooms</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5">
                <ul class="list-unstyled link">
                    <li><a href="#">Our Location</a></li>
                    <li><a href="#">The Hosts</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Restaurant</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-5 pr-md-5 contact-info">
                <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span>
                </p>
                <p><span class="d-block">Phone:</span> <span> (+1) 435 3533</span></p>
                <p><span class="d-block">Email:</span> <span> info@yourdomain.com</span></p>
            </div>
            <div class="col-md-3 mb-5">
                <p>Sign up for our newsletter</p>
                <form action="#" class="footer-newsletter">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email...">
                        <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row bordertop pt-5">
            <p class="col-md-6 text-left">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a
                        href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

            <p class="col-md-6 text-right social">
                <a href="#"><span class="fa fa-tripadvisor"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
            </p>
        </div>
    </div>
</footer>

@include('frontend.partials._scripts')
</body>
</html>