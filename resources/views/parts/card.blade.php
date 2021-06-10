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
    

<section class="ftco-section our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>Annonces</h2>
        </div>
        <div class="row team_row">
            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    <div class="item">
                        <div class="blog-entry e-border">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('users/annonce/images/image_1.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="yr">26 Novembre 2021</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4 border-margin">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry e-border">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('users/annonce/images/image_2.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">26</span>
                                    <span class="mos">Nov.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4 border-margin">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry e-border">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('users/annonce/images/image_3.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">26</span>
                                    <span class="mos">Nov.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4 border-margin">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry e-border">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('users/annonce/images/image_4.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">26</span>
                                    <span class="mos">Nov.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4 border-margin">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry e-border">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('users/annonce/images/image_5.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">26</span>
                                    <span class="mos">Nov.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4 border-margin">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="blog-entry e-border">
                            <a href="#" class="block-20 d-flex align-items-start" style="background-image: url('users/annonce/images/image_6.jpg');">
                                <div class="meta-date text-center p-2">
                                    <span class="day">26</span>
                                    <span class="mos">Nov.</span>
                                    <span class="yr">2019</span>
                                </div>
                            </a>
                            <div class="text border border-top-0 p-4 border-margin">
                                <h3 class="heading"><a href="#">Finance And Legal Working Streams Occur Throughout</a></h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    <p class="ml-auto meta2 mb-0">
                                        <a href="#" class="mr-2">Admin</a>
                                        <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    