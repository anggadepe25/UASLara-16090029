<?php
/**
 * Created by PhpStorm.
 * User: Angga DP
 * Date: 09/07/2019
 * Time: 11:31
 */
?>

        <!doctype html>
<html lang="en">
<head>
    <title>Colorlib Villa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets-user/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets-user/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets-user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-user/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('assets-user/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-user/fonts/fontawesome/css/font-awesome.min.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('assets-user/css/style.css')}}">
</head>
<body>

<header class="site-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 site-logo" data-aos="fade"><a href="index.html"><em>Villa</em></a></div>
            <div class="col-8">


                <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- END menu-toggle -->

                <div class="site-navbar js-site-navbar">
                    <nav role="navigation">
                        <div class="container">
                            <div class="row full-height align-items-center">
                                <div class="col-md-6">
                                    <ul class="list-unstyled menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li class="active"><a href="hotel.html">Hotel</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 extra-info">
                                    <div class="row">
                                        <div class="col-md-6 mb-5">
                                            <h3>Contact Info</h3>
                                            <p>98 West 21th Street, Suite 721 <br> New York NY 10016</p>
                                            <p>info@yourdomain.com</p>
                                            <p>(+1) 435 3533</p>

                                        </div>
                                        <div class="col-md-6">
                                            <h3>Connect With Us</h3>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Instagram</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END head -->

<section class="site-hero overlay page-inside" style="background-image: url({{asset ('assets-user/img/hero_2.jpg')}}">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center">
                <h1 class="heading" data-aos="fade-up">Our Hotel</h1>
                <p class="sub-heading mb-5" data-aos="fade-up" data-aos-delay="100">Enjoy your stay.</p>
            </div>
        </div>
        <!-- <a href="#" class="scroll-down">Scroll Down</a> -->
    </div>
</section>

        <section class="bg-light">
            <div class="half d-md-flex d-block">
                <div class="image" data-aos="fade" style="background-image: url({{ asset('uploads/'. $tour->gambar)}}); margin: 20px "></div>
                <div class="text" data-aos="fade-right" data-aos-delay="200">
                    <h2>{{$tour->namatour}}</h2>
                    <p>{{$tour->deskripsi}}</p>

                </div>
            </div>
        </section>




    </div>
</section>
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
                <p><span class="d-block">Address:</span> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
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
            <p class="col-md-6 text-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

            <p class="col-md-6 text-right social">
                <a href="#"><span class="fa fa-tripadvisor"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-twitter"></span></a>
            </p>
        </div>
    </div>
</footer>

<script src="{{asset('assets-user/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets-user/js/popper.min.js')}}"></script>
<script src="{{asset('assets-user/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets-user/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets-user/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets-user/js/aos.js')}}"></script>
<script src="{{asset('assets-user/js/main.js')}}"></script>
</body>
</html>
