@include('parts/head')
<body>
    <!-- Preloader -->
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

	<!-- Top Header_Area -->
	@include('parts/menu_home')
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

    <section class="our_team_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('public.exempleProfil')</h2>
            </div>
            
            <div class="row team_row">
                <div class="col-xs-11 col-md-12 col-centered wow fadeInUp" data-wow-delay="0.2s">
                    <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="7500">
                        <div class="carousel-inner">
                        @foreach ($intervenants as $intervenant)
                            <div class="item {{ $loop->first ? 'active' : ''}}">
                                <div class="carousel-col">
                                    <div class="team_membar">
                                    <img src="{{ asset('supconnexion/public/uploads/photo/profil/'.$intervenant->photo) }}" alt="">
                                        <div class="team_content">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                            <a href="#" class="name">{{ $intervenant->name }}</a>
                                            <h6>{{ $tr->translate($intervenant->fonction) }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>

                        <!-- Controls -->
                        <div class="left carousel-control">
                            <a href="#carousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <div class="right carousel-control">
                            <a href="#carousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Our Testimonial Area -->
    <section class="testimonial_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('public.temoignage')</h2>
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
                            <h6>{{$tr->translate("Docteur en Sciences de gestion")}}</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>{{$tr->translate("Grâce à Sup'Connexion, j'interviens dans trois différentes écoles")}}<i class="fa fa-quote-left" aria-hidden="true"></i></p>
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
                            <h6>{{$tr->translate('Ingénieur Génie Logiciel')}}</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>{{$tr->translate("Avec Sup'Connexion, j'ai pu obtenir un emploi et j'interviens dans plusieurs écoles")}}<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
            
            </div>
        </div>
    </section>
    <!-- End Our testimonial Area -->
    <section class="latest_blog_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('public.actualiteEns')</h2>
            </div>
            <div class="row latest_blog">
                @foreach ($actualites as $actualite)
                    <div class="col-md-4 col-sm-6 blog_content">
                        <img style="height: 200px; width: 360px" src="{{ asset('supconnexion/public/uploads/photo/actualite/'.$actualite->photo) }}" alt="">
                        <a href="#" class="blog_heading text-justify">{{($tr->translate($actualite->titre)) }}</a>
                        <h4><small>{{$tr->translate('Par')}}  </small><a style="color: blue; font-weight: bold;" href="#">{{($actualite->auteur) }}</a><span>/</span><small style="color: #f6b60b; font-weight: bold;"> <i class="fa fa-calendar" aria-hidden="true"></i>
                        <?php
                            echo date("d F, Y", strtotime(" $actualite->date_pub "));
                        ?></small></h4>
                        <p class="text-justify" style="font-family: 'Comic Sans MS'; font-weight: bold;">{{ Illuminate\Support\Str::limit($tr->translate($actualite->texte, 200)) }}... <a href="{{ route('actualite.details',$actualite->id)}}"><span style="color: red; font-weight: bold;">{{$tr->translate('Lire la suite')}}<span></a></p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Our Achievments Area -->
    <section class="our_achievments_area" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('public.nosRealisation')</h2>
                <h4></h4>
            </div>
            <div class="achievments_row row">
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-info" aria-hidden="true"></i>
                    <span class="counter">{{$nbannonce}}</span>
                    <h6>@lang('public.annonce')</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-university" aria-hidden="true"></i>
                    <span class="counter">{{$nbecole}}</span>
                    <h6>@lang('public.etablissements')</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="counter">{{$nbintervenant}}</span>
                    <h6>@lang('public.intervenants')</h6>
                </div>
                <div class="col-md-3 col-sm-6 p0 completed">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <span class="counter">{{$nbpartenaire}}</span>
                    <h6>@lang('public.partenanires')</h6>
                </div>>
            </div>
        </div>
    </section>
    <!-- End Our Achievments Area -->

    <!-- Our Partners Area -->
    <section class="our_partners_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>@lang('public.nosPartenanires')</h2>
            </div>
            <div class="partners">
                @foreach ($partenaires as $partenaire)
                    <div class="item"><img src="{{ asset('supconnexion/public/uploads/photo/partenaire/'.$partenaire->photo) }}" alt=""></div>
                 @endforeach
            </div>
        </div>
        <div class="book_now_aera">
            <div class="container">
                <div class="row book_now">
                    <div class="col-md-10 booking_text">
                    </div>
                    <div class="col-md-2 p0 book_bottun">
                        <a href="{{route('contacts.index')}}" class="button_all">@lang('public.contactezNous')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Partners Area -->

    <!-- Footer Area -->
    @include('parts/footer')
