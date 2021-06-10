    <section class="our_team_area">
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
                                    <img src="{{ asset('uploads/photo/profil/'.$intervenant->photo) }}" alt="">
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


    