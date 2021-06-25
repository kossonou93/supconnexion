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
            <h2>PROJETS ACADEMIQUES</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('academique.index')}}" class="active">Projets Académiques</a></li>
            </ol>
        </section>
        
        <section class="latest_blog_area">
            <div class="container">
                <div class="tittle wow fadeInUp">
                    <h2>Les Projets Académiques</h2>
                    
                </div>
                <div class="row latest_blog">
                    @foreach ($academiques as $academique)
                        <div class="col-md-4 col-sm-6 blog_content">
                            <img src="{{ asset('supconnexion/public/uploads/photo/actualite/'.$academique->photo) }}" alt="">
                            <a href="#" class="blog_heading text-justify">{{($academique->titre) }}</a>
                            <h4><small>Par  </small><a style="color: blue; font-weight: bold;" href="#">{{($academique->auteur) }}</a><span>/</span><small style="color: #f6b60b; font-weight: bold;"> <i class="fa fa-calendar" aria-hidden="true"></i>
                            <?php
                                echo date("d F, Y", strtotime(" $academique->date_pub "));
                            ?></small></h4>
                            <p class="text-justify" style="font-family: 'Comic Sans MS'; font-weight: bold;">{{ Illuminate\Support\Str::limit($academique->texte, 200) }}... <a href="{{ route('academique.details',$academique->id)}}"><span style="color: red; font-weight: bold;">Lire la suite<span></a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


 @include('parts/footer')
