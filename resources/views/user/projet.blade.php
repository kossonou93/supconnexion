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
            <h2>Le Projet Sup'Connexion</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('contacts.index')}}" class="active">Le Projet Sup'Connexion</a></li>
            </ol>
        </section>
        <!-- End Banner area -->
        <!-- All contact Info -->
        <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-12 contact_info">
                    <p class="text-justify" style="font-weight: bold; font-family: 'Comic Sans MS';"><span style="font-family: 'Comic Sans MS'; color: blue">Le projet est  un Portail dédié </span>
                    <span style="color: red; font-size: 20px">AUX BESOINS ET OPPORTUNITES DANS LE SUPERIEUR EN AFRIQUE, AINSI QUE DES INTERVENANTS - SPECIALISTES INTERNATIONAUX AFRICAINS DANS LE SECTEUR. </span>
                    <span style="color: blue">Ce Portail aura plusieurs fonctionnalités dont :  </span>
                    </p>
                    <p class="text-justify">
                        <ul class="text-justify" style="font-family: 'Comic Sans MS'; font-weight: bold; font-size: 15px">
                            <li>Donnez de la visibilité  aux besoins de recrutements de votre établissement d’enseignement supérieur ; postez vos annonces, vos besoins en vacation, CDD, CDI. Les établissements d’enseignement supérieur peut donc s’inscrire et s’ouvrir un compte.</li>
                            <br>
                            <li>Trouvez les intervenants spécialistes et qualifiés dont votre établissement supérieur a besoin.</li>
                            <br>
                            <li>Donnez de la visibilité à vos domaines d’expertise et de qualification en matière d’enseignement dans le supérieur ; référencez votre CV, votre parcours de formation, votre expérience en tant qu’intervenant dans le supérieur. Les intervenants sont donc invités également à s’inscrire et à s’ouvrir un compte.</li>
                            <br>
                            <li>Trouver des opportunités d’intervention dans le supérieur en tant que spécialiste</li>
                            <br>
                            <li>Donnez de la visibilité à vos opportunités de grands projets à réaliser dans le supérieur en tant que partenaire dans l’éducation et l’enseignement supérieur. Ils peuvent donc poster leurs annonces – projets ; leurs appels d’offre ; leurs appels à manifestation d’intérêt.</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
