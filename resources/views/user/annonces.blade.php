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
            <h2>ANNONCES</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('annonces')}}" class="active">Annonces</a></li>
            </ol>
        </section>
        
        <section class="blog_tow_area">
            <div class="container">
                <div class="row blog_tow_row">
                    @foreach ($annonces as $annonce)
                        <div class="col-md-4 col-sm-6">
                            <div class="renovation">
                                <img src="{{ asset('uploads/image/annonce/'.$annonce->image) }}" alt="">
                                <div class="renovation_content">
                                    <a class="clipboard" href="#"><i class="fa fa-clipboard" aria-hidden="true"></i></a>
                                    <a class="tittle" href="#">{{ $annonce->intitule }}</a>
                                    <div class="date_comment">
                                        <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?php
                                                echo date("jS F, Y", strtotime(" $annonce->created_at "));
                                            ?>
                                        </a>
                                    </div>
                                    <p>{{ $annonce->description }}</p>
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
                    @endforeach
                </div>
            </div>
        </section>


 @include('parts/footer')
