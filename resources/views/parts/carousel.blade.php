    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
        @foreach ($carousels as $carousel)
            <div data-thumb="admini/image_carousel/ste_lucie.jpg" data-src="{{ asset('uploads/photo/carousel/'.$carousel->photo) }}">
                <div class="camera_caption">
                   <div class="container">
                        <h1 class=" wow fadeInUp animated titre-carousel">{{ $carousel->titre }}</h1>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s" style="color: #f6b60b"><i class="fa fa-hand-o-down fa-4x" aria-hidden="true"></i></p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="{{route('leprojet')}}">@lang('public.enSavoirPlus')</a>
                   </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>
    <!-- End Slider area -->




    