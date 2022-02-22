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
            <h2>@lang('public.annonce')</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('annonces')}}" class="active">@lang('public.annonce')</a></li>
            </ol>
        </section>
        
        <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
                    <img src="{{ asset('uploads/image/annonce/'.$annonce->image) }}" alt="">
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
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;">Langue d'intervention</h4>
                            @foreach ($langues as $langue)
                                <a href="#">{{$langue->name}}</a>
                            @endforeach
                        </div>
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;">Domaine(s) d'intervention</h4>    
                            @foreach ($disciplines as $discipline)
                                <a href="#">{{$discipline->name}}</a>
                                <br><br>
                            @endforeach 
                        </div>
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;">Type(s) d'intervention</h4>
                            @foreach ($interventions as $intervention)
                                <a href="#">{{$intervention->type}}</a>
                                <br><br>
                            @endforeach 
                        </div>
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;">Date Limite</h4>
                            <a href="#" style="font-family: 'Comic Sans MS'; font-weight: bold; color: red;">
                                <?php
                                echo date("d F Y", strtotime(" $annonce->date_limite "));
                            ?>
                            </a>
                        </div>
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;">Dossier(s) de candidature</h4>
                            <p style="font-family: 'Comic Sans MS'; font-weight: bold;">
                                {{$annonce->dossier}}
                            </p>
                        </div>
                        <div class="tag">
                            <h4 style="font-family: 'MV Boli'; font-weight: bold; color: #371F57;">Adresse</h4>
                            <p style="font-family: 'Comic Sans MS'; font-weight: bold; color: blue">
                                {{$annonce->adresse}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


 @include('parts/footer')
