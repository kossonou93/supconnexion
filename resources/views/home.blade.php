@include('parts/head')
<body>
    <!-- Preloader -->
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

	<!-- Top Header_Area -->
	@include('parts/menu')
   <!-- <div class="row">
        <div class="col-sm-12 col-md-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
        </div>
    </div>
     Slider area -->
    @include('parts/carousel')

    @include('parts/card')

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Achievments</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                    <span class="counter">800</span>
                    <h6>PROJECT COMPLETED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="counter">230</span>
                    <h6>HOUSE RENOVATIONS</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-child" aria-hidden="true"></i>
                    <span class="counter">1390</span>
                    <h6>WORKERS EMPLOYED</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <span class="counter">125</span>
                    <h6>AWARDS WON</h6>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->
    
    
    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Exemples de Profils</h2>
            </div>
            <div class="row team_row">
                @foreach ($intervenants as $intervenant)
                    <div class="col-md-3 col-sm-6 wow fadeInUp">
                        <div class="team_membar">
                                <img src="{{ asset('uploads/photo/profil/'.$intervenant->photo) }}" alt="">
                                <div class="team_content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <a href="#" class="name">{{ $intervenant->name }}</a>
                                    <h6>{{ $intervenant->fonction }}</h6>
                                </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Team Area -->
    
    <!-- End Our Team Area -->

    <!-- Our Achievments Area -->

    <!-- End Our Achievments Area -->

    <!-- Our Testimonial Area -->
    <section class="testimonial_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>TEMOIGNAGES</h2>
            </div>
            <div class="testimonial_carosel">
            
                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="users/images/0.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Dr Denis Gnanzou</h4>
                            <h6>Docteur en Sciences de gestion</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Grâce à Sup'Connexion, j'interviens dans trois différentes écoles<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>

                <div class="item">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="users/images/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Martin Kossonou</h4>
                            <h6>Ingénieur Génie Logiciel</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>Avec Sup'Connexion, j'ai pu obtenir un emploi et j'interviens dans plusieurs écoles<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
            
            </div>
        </div>
    </section>
    <!-- End Our testimonial Area -->

    <!-- Our Featured Works Area -->

    <!-- End Our Featured Works Area -->

    <!-- Our Latest Blog Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Nos Actualités</h2>
            </div>
            <div class="row latest_blog">
             @foreach ($actualites as $actualite)
                <div class="col-md-4 col-sm-6 blog_content">
                    <img src="images/blog/lb-1.jpg" alt="">
                    <a href="#" class="blog_heading">{{ $actualite->titre }}</a>
                    <h4><small>par  </small><a href="#">{{ $actualite->auteur }} ...</a><span>/</span><small> </small> {{ $actualite->created_at }}</h4>
                    <p>{{ $actualite->soustitre }}</p>
                    <p><a class="button_all" href="#">Voir plus</a></p>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- End Our Latest Blog Area -->

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Nos Partenaires</h2>
            </div>
            <div class="partners">
                @foreach ($partenaires as $partenaire)
                    <div class="item"><img src="{{ asset('uploads/photo/partenaire/'.$partenaire->photo) }}" alt=""></div>
                 @endforeach
            </div>
        </div>
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="{{route('contacts.index')}}" class="button_all">Contactez-Nous</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

    <!-- Footer Area -->
    @include('parts/footer')
