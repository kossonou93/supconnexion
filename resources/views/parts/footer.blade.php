<footer class="footer_area">
    <div class="container">
        <div class="footer_row row">
            <div class="col-md-4 col-sm-8 footer_about">
                <h2>@lang('public.aproposNous')</h2>
                <img src="users/images/logo-footer.png" alt="">
                <ul class="socail_icon">
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-8 footer_about quick">
                <h2>@lang('public.nosLiens')</h2>
                <ul class="quick_link">
                   <!-- <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>-->
                    <li><a href="{{route('admin.login')}}"><i class="fa fa-chevron-right"></i>Connexion</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-8 footer_about">
                <h2>@lang('public.contactNous')</h2>
                <address>
                    <ul class="my_address">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>contact@sup-connexion.com</a></li>
                        <!--<li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span></span></a></li>-->
                    </ul>
                </address>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Area -->
@include('sweetalert::alert')
<!-- jQuery JS -->
<script src="{{ asset('users/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>

<script src="{{ asset('users/annonce/js/jquery.min.js') }}"></script>

<script src="{{ asset('users/annonce/js/jquery.min.js') }}"></script>
<script src="{{ asset('users/annonce/js/popper.js') }}"></script>
<!--<script src="{{ asset('users/annonce/js/bootstrap.min.js') }}"></script>-->
<script src="{{ asset('users/annonce/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('users/annonce/js/main.js') }}"></script>

<script src="{{ asset('users/js/jquery-3.5.1.min.js') }}"></script>

<script src="{{ asset('users/js/jquery-1.12.0.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('users/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('users/js/carousel.js') }}"></script>
<script src="{{ asset('users/js/sweetalert.min.js') }}"></script>
<script>
    setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
</script>

<script src="{{ asset('users/js/date_heure.js') }}"></script>
<script type="text/javascript">window.onload = date_heure('date_heure');</script>
<!-- Animate JS -->
<script src="{{ asset('users/vendors/animate/wow.min.js') }}"></script>
<!-- Camera Slider -->
<script src="{{ asset('users/vendors/camera-slider/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('users/vendors/camera-slider/camera.min.js') }}"></script>
<!-- Isotope JS -->
<script src="{{ asset('users/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('users/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<!-- Progress JS -->
<script src="{{ asset('users/vendors/Counter-Up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('users/vendors/Counter-Up/waypoints.min.js') }}"></script>
<!-- Owlcarousel JS -->
<script src="{{ asset('users/vendors/owl_carousel/owl.carousel.min.js') }}"></script>
<!-- Stellar JS -->
<script src="{{ asset('users/vendors/stellar/jquery.stellar.js') }}"></script>
<!-- Theme JS -->
<script src="{{ asset('users/js/theme.js') }}"></script>
<script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({
          pageLanguage: 'fr',
          includedLanguages: 'en,fr,',
          autoDisplay: false,
    },
 'google_translate_element'); 
    } 
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
