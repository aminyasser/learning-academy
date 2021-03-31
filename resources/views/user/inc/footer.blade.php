  <!-- footer part start-->
  <footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="{{route('user.homepage')}}"> <img src="{{asset('user/img')}}/logo.png" alt=""> </a>
                    <p>But when shot real her. Chamber her one visite removal six
                        sending himself boys scot exquisite existend an </p>
                    <p>But when shot real her hamber her </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Newsletter</h4>
                    <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                    </p>

                    @include('user.inc.errors')
                <form action="{{route('user.message.newsletter')}}" method="post">
                    @csrf
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" placeholder='Enter email address'
                                    onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="submit"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="{{$sett->facebook}} "> <i class="ti-facebook"></i> </a>
                        <a href="{{$sett->twitter}} "> <i class="ti-twitter-alt"></i> </a>
                        <a href="{{$sett->instagram}} "> <i class="ti-instagram"></i> </a>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Contact us</h4>
                    <div class="contact_info">
                        <p><span> Address :</span> {{$sett->address . ',' . $sett->city }} </p>
                        <p><span> Phone :</span> {{$sett->phone}} </p>
                        <p><span> Email : </span> {{$sett->email}} </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{asset('user/js')}}/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="{{asset('user/js')}}/popper.min.js"></script>
<!-- bootstrap js -->
<script src="{{asset('user/js')}}/bootstrap.min.js"></script>
<!-- easing js -->
<script src="{{asset('user/js')}}/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="{{asset('user/js')}}/swiper.min.js"></script>
<!-- swiper js -->
<script src="{{asset('user/js')}}/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="{{asset('user/js')}}/owl.carousel.min.js"></script>
<script src="{{asset('user/js')}}/jquery.nice-select.min.js"></script>
<!-- swiper js -->
<script src="{{asset('user/js')}}/slick.min.js"></script>
<script src="{{asset('user/js')}}/jquery.counterup.min.js"></script>
<script src="{{asset('user/js')}}/waypoints.min.js"></script>
<!-- custom js -->
<script src="{{asset('user/js')}}/custom.js"></script>

@yield('scripts')

</body>

</html>