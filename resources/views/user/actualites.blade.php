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
                    <h2>Our Latest Blog</h2>
                    <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                </div>
                <div class="row latest_blog">
                    @foreach ($actualites as $actualite)
                        <div class="col-md-4 col-sm-6 blog_content">
                            <img src="{{ asset('uploads/photo/actualite/'.$actualite->photo) }}" alt="">
                            <a href="#" class="blog_heading">{{($actualite->titre) }}</a>
                            <h4><small>Par  </small><a href="#">{{($actualite->auteur) }}</a><span>/</span><small>ON </small> October 15, 2016</h4>
                            <p>{{ Illuminate\Support\Str::limit($actualite->texte, 80) }}... <a href="#">Lire la suite</a></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


 @include('parts/footer')
