@include('parts/head')
<body>
    <!-- Preloader -->
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

	<!-- Top Header_Area -->
	@include('parts/menu')
    <!-- Banner area -->
        <section class="banner_area" data-stellar-background-ratio="0.5">
            <h2>@lang('public.galerie')</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('condition.generale')}}" class="active">@lang('public.galerie')</a></li>
            </ol>
        </section>
        <!-- End Banner area -->
        
        <!-- All contact Info -->
        <section class="featured_works row" data-stellar-background-ratio="0.3" style="background-position: 50% -189px;">
            <div class="tittle wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <h2>@lang('public.notreGalerie')</h2>
            </div>
            <div class="featured_gallery">
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-1.jpg" alt="" data-pagespeed-url-hash="3458514454" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-3.jpg" alt="" data-pagespeed-url-hash="3753014375" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-1.jpg" alt="" data-pagespeed-url-hash="4047514296" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-3.jpg" alt="" data-pagespeed-url-hash="47046921" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-1.jpg" alt="" data-pagespeed-url-hash="341546842" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-3.jpg" alt="" data-pagespeed-url-hash="636046763" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-1.jpg" alt="" data-pagespeed-url-hash="930546684" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-3.jpg" alt="" data-pagespeed-url-hash="1225046605" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
                    <img src="users/images/gallery/gl-3.jpg" alt="" data-pagespeed-url-hash="1225046605" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    <div class="gallery_hover">
                        <h4>Bolt Apartments</h4>
                        <a href="#">@lang('public.enSavoirPlus')</a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
