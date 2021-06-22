<section class="top_header_area">
    <div class="container">
        <ul class="nav navbar-nav top_nav">
            <li><a href="#"><i class="fa fa-envelope-o"></i>contact@supconnexion.com</a></li>
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
            <div class="col-md-8 p0" style="max-height: 100px">
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
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inscription</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('ecole.register')}}">Inscription Etablissement</a></li>
                                <li><a href="{{route('intervenant.register')}}">Inscription Intervenant</a></li>
                            </ul>
                        </li>
                        <li><a href="#"></a></li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connexion</a>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('ecole.login')}}">Connexion Etablissement</a></li>
                                <li><a href="{{route('intervenant.login')}}">Connexion Intervenant</a></li>
                            </ul>
                        </li>
                        
                      <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">A Propos</a>
                          	<ul class="dropdown-menu">
                              <li><a href="{{route('leprojet')}}">Le projet Sup'Connexion</a></li>
                              <li><a href="#">Conditions générales de ventes</a></li>
                              <li><a href="#">Charte utilisateurs</a></li>
                              <li><a href="#">Protection des données</a></li>
                              <li><a href="{{route('actualite.index')}}">Actualités dans le Supérieur</a></li>
                              <li><a href="{{route('annonces')}}">Alertes opportunités</a></li>
                              <li><a href="{{route('contacts.index')}}">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Projets académiques</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->

    