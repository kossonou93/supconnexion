    <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
        @foreach ($carousels as $carousel)
            <div data-thumb="admini/image_carousel/ste_lucie.jpg" data-src="{{ asset('supconnexion/public/uploads/photo/carousel/'.$carousel->photo) }}">
                <div class="camera_caption">
                   <div class="container">
                        <h4 class=" wow fadeInUp animated" style="font-family: 'Comic Sans MS'; font-weight: bold; background-color: rgb(0, 0, 0, 0.2); padding: 20px, 0px, 20px, 0px; width: 90%;  margin-right:5%; margin-left:5%; text-align:center; font-style: italic; color: #FFFFFF">{{ $carousel->titre }}</h4>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s" style="color: #f6b60b"><i class="fa fa-hand-o-down fa-4x" aria-hidden="true"></i></p>
                        <a class=" wow fadeInUp animated" data-wow-delay="1s" href="{{route('ecole.register')}}">En savoir plus</a>
                   </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>
    <!-- End Slider area -->




    