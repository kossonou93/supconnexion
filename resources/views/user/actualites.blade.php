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
            <h2>ACTUALITES</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('actualite.index')}}" class="active">Actualités</a></li>
            </ol>
        </section>
        
        <section class="latest_blog_area">
            <div class="container">
                <div class="tittle wow fadeInUp">
                    <h2>Les Actualités dans l'Enseignement Supérieur</h2>
                    
                </div>
                <div class="row latest_blog">
                    @foreach ($actualites as $actualite)
                        <div class="col-md-4 col-sm-6 blog_content">
                            <img src="{{ asset('uploads/photo/actualite/'.$actualite->photo) }}" alt="">
                            <a href="#" class="blog_heading text-justify">{{($actualite->titre) }}</a>
                            <h4><small>Par  </small><a style="color: blue; font-weight: bold;" href="#">{{($actualite->auteur) }}</a><span>/</span><small style="color: #f6b60b; font-weight: bold;"> <i class="fa fa-calendar" aria-hidden="true"></i>
                            <?php
                                echo date("d F, Y", strtotime(" $actualite->created_at "));
                            ?></small></h4>
                            <p class="text-justify" style="font-family: 'Comic Sans MS'; font-weight: bold;">{{ Illuminate\Support\Str::limit($actualite->texte, 200) }}... <a href="{{ route('actualite.details',$actualite->id)}}"><span style="color: red; font-weight: bold;">Lire la suite<span></a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


 @include('parts/footer')
