
<section class="ftco-section our_team_area">
    <div class="container">
        <div class="tittle wow fadeInUp">
            <h2>@lang('public.annonce')</h2>
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
                                    <h3 class="heading"><a href="#">{{ Illuminate\Support\Str::limit($annonce->{'intitule_'.$local}, 30) }}</a></h3>
                                    <p maxlength="100">{{ Illuminate\Support\Str::limit($annonce->{'description_'.$local}, 80) }}</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0" style="margin-top: 10px"><a href="{{ route('annonce.details',$annonce->id)}}" class="btn btn-primary">@lang('public.enSavoirPlus') <span class="ion-ios-arrow-round-forward"></span></a></p>
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
    