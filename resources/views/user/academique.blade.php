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
            <h2>ACTUALITE</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('academique.index')}}" class="active">Projet Académiques</a></li>
            </ol>
        </section>
        
        <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="{{ asset('supconnexion/public/uploads/photo/academique/'.$academique->photo) }}" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#">
                                <?php
                                    echo date("d", strtotime(" $academique->date_pub "));
                                ?>
                            </a>
                            <a href="#">
                                <?php
                                    echo date("m", strtotime(" $academique->date_pub "));
                                ?>
                            </a>
                            <a href="#">
                                <?php
                                    echo date("Y", strtotime(" $academique->date_pub "));
                                ?>
                            </a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">{{ $academique->titre }}</a>
                        
                        <p>{{ $academique->texte }}</p>
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;"></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 @include('parts/footer')
