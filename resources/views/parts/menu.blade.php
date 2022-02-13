<div id="google_translate_element" style="display: none"></div>

    @include('parts/first_section')

<!--<section class="top_header_area">
    <div class="container">
        <ul class="nav navbar-nav top_nav">
            <li><a href="#"><i class="fa fa-envelope-o"></i>contact@sup-connexion.com</a></li>
            <li>
                <a href="#">
                    <i class="fa fa-clock-o"></i>
                    <span id="date_heure"></span>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right social_nav">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-right: -350px">
            <li><a type="button" href="locale/fr" class="btn-image white-text" style="background-image: url('users/images/fr.png') !important; width: 60px; height: 20px; background-size: cover; margin-top: 10px; margin-right: 5px"></a></li>
            <li><a type="button" href="locale/en" class="btn-image white-text" style="background-image: url('users/images/en.png') !important; width: 60px; height: 20px; background-size: cover; margin-top: 10px"></a></li>
        </ul>
    </div>
</section>


	 Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('home')}}" style="margin-top: -29px"><img src="users/images/logo.png" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0" style="max-height: 100px">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu">
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                            <ul class="dropdown-menu other_dropdwn">
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('public.inscription')</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('ecole.register')}}">@lang('public.inscriptionEts')</a></li>
                                <li><a href="{{route('intervenant.register')}}">@lang('public.inscriptionInt')</a></li>
                            </ul>
                        </li>
                        <li><a href="#"></a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connexion</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('ecole.login')}}">@lang('public.connexionEts')</a></li>
                                <li><a href="{{route('intervenant.login')}}">@lang('public.connexionInt')</a></li>
                            </ul>
                        </li>
                        
                      	<li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('public.apropos')</a>
                          	<ul class="dropdown-menu">
                              <li><a href="{{route('leprojet')}}">@lang('public.projetSup')</a></li>
                              <li><a href="{{route('condition.generale')}}">@lang('public.conditionGle')</a></li>
                              <li><a href="#">@lang('public.charteUt')</a></li>
                              <li><a href="#">@lang('public.protectionData')</a></li>
                              <li><a href="{{route('actualite.index')}}">@lang('public.actualiteSup')</a></li>
                              <li><a href="{{route('annonces')}}">@lang('public.alerteOp')</a></li>
                              <li><a href="{{route('contacts.index')}}">Contact</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('public.projetAc')</a>
                          <ul class="dropdown-menu">
                              <li><a href="#">@lang('public.appelOf')</a></li>
                              <li><a href="#">@lang('public.appuiTec')</a></li>
                              <li><a href="{{route('academique.index')}}">@lang('public.appuiTec')</a></li>
                              <li><a href="#">@lang('public.projetAcAfr')</a></li>
                           </ul>
                      	</li>
                      	<li><a href="#">@lang('public.academiciensAfr')</a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">@lang('public.confAn')</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">@lang('public.laConfAn')</a></li>
                                <li><a href="#">@lang('public.acteConf')</a></li>
                                <li><a href="{{route('galeries')}}">@lang('public.galerie')</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

    