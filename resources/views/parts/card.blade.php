<!--<section class="our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Annonces</h2>
        </div>
        
        <div class="row team_row">
            <div class="col-xs-11 col-md-12 col-centered wow fadeInUp" data-wow-delay="0.2s">
                <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="15000">
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
                                        <a href="#" class="name">En savoir plus</a>
                                        <h6>{{ $intervenant->fonction }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>

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
</section> -->
    

<section class="ftco-section our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Annonces</h2>
        </div>
        <div class="row team_row">
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    @foreach ($annonces as $annonce)
                        <div class="item {{ $loop->first ? 'active' : ''}} e-border">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('{{ asset('supconnexion/public/uploads/image/annonce/'.$annonce->image) }}');">
                                    <div class="meta-date text-center p-2">
                                        <span class="yr">
                                            <?php
                                                echo date("d F, Y", strtotime(" $annonce->created_at "));
                                            ?>
                                            
                                        </span>
                                    </div>
                                </a>
                                <div class="text border border-top-0 p-4 border-margin">
                                    <h3 class="heading"><a href="#">{{ Illuminate\Support\Str::limit($annonce->intitule, 30) }}</a></h3>
                                    <p maxlength="100">{{ Illuminate\Support\Str::limit($annonce->description, 80) }}</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0" style="margin-top: 10px"><a href="{{ route('annonce.details',$annonce->id)}}" class="btn btn-primary">En savoir plus <span class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0" style="margin-top: 20px">
                                            <a href="#" class="mr-2" style="font-family: 'Comic Sans MS'; font-weight: bold; color: #371F57;">
                                                @foreach ($ecoles as $ecole)
                                                    @if ($ecole->id == $annonce->ecole_id)
                                                        {{$ecole->name}}
                                                    @endif
                                                @endforeach
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
    