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
                    <h3>Contact Info</h3>
                    <p><h4>L’objectif général de ce projet est de mettre en place un Portail  dédié </h4><h3>AUX BESOINS ET OPPORTUNITES DANS LE SUPERIEUR EN AFRIQUE, AINSI QUE DES INTERVENANTS - SPECIALISTES INTERNATIONAUX AFRICAINS DANS LE SECTEUR. </h3></p>
                    <p></p>
                    <div class="location">
                        <div class="location_laft">
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">contact@supconnexion.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
