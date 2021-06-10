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
            <h2>ANNONCE</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('annonces')}}" class="active">Annonces</a></li>
            </ol>
        </section>
        
        <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="images/blog/blog_hed-1.jpg" alt="">
                    <div class="col-xs-1 p0">
                       <div class="blog_date">
                           <a href="#">
                                <?php
                                    echo date("d", strtotime(" $annonce->created_at "));
                                ?>
                            </a>
                            <a href="#">
                                <?php
                                    echo date("m", strtotime(" $annonce->created_at "));
                                ?>
                            </a>
                            <a href="#">
                                <?php
                                    echo date("Y", strtotime(" $annonce->created_at "));
                                ?>
                            </a>
                       </div>
                    </div>
                    <div class="col-xs-11 blog_content">
                        <a class="blog_heading" href="#">{{ $annonce->intitule }}</a>
                        <a class="blog_admin" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            @foreach ($ecoles as $ecole)
                                @if ($ecole->id == $annonce->ecole_id)
                                    {{$ecole->name}}
                                @endif
                            @endforeach
                        </a>
                        <p>{{ $annonce->description }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


 @include('parts/footer')
