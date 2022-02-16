<div id="google_translate_element" style="display: none"></div>

    <section class="top_header_area">
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
            <ul class="nav navbar-nav navbar-right">
                <li><a href="locale/fr" style="color: #f6b60b; font-weight: bold">FRENCH</a></li>
                <li><a href="locale/en" style="color: #f6b60b; font-weight: bold">ENGLISH</a></li>
            </ul>
        </div>
    </section>

	<!-- Header_Area -->
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

    