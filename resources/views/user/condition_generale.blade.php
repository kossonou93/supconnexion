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
            <h2>Conditions Générales de Ventes</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('condition.generale')}}" class="active">Conditions Générales de Ventes</a></li>
            </ol>
        </section>
        <!-- End Banner area -->
        <!-- All contact Info -->
        <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-12 contact_info">
                    <p class="text-justify" style="font-weight: bold; font-family: 'Comic Sans MS';"><span style="font-size: 18px; font-family: 'Comic Sans MS'; color: black">Cette page contient les Conditions générales qui régissent les relations entre Sup’Connexion et ses parties prenantes concernant l’utilisation de son Portail. Veuillez lire attentivement les présentes Conditions générales avant toute utilisation du Portail. Vous devez comprendre qu’en utilisant le Portail de Sup’Connexion, vous acceptez d’être lié par les présentes Conditions Générales. </span>
                    </p>
                    <p class="text-justify">
                        <ul class="text-justify" style="list-style-type: decimal;font-family: 'Comic Sans MS'; font-weight: bold; font-size: 18px; color: #f6b60b">
                            <li>Services
                                <ul style="color: #371F57; font-size: 15px">
                                    <li>
                                        Le projet Sup'Connexion est un Portail dédié à l'expertise internationale africaine dans le supérieur et aux besoins des établissements. Il porte en effet sur Les BESOINS ET OPPORTUNITES DANS LE SUPERIEUR EN AFRIQUE, AINSI QUE SUR LES INTERVENANTS - SPECIALISTES INTERNATIONAUX AFRICAINS DANS LE SECTEUR. Le Portail a plusieurs fonctionnalités et fournit ainsi plusieurs services dont : 
                                        <ul style="color: black; font-size: 13px">
                                            <li>
                                                Donner de la visibilité aux besoins de recrutements de votre établissement d’enseignement supérieur ; vous permet de poster vos annonces, vos besoins en vacation, CDD, CDI. Les établissements d’enseignement supérieur peuvent donc s’inscrire et s’ouvrir un compte,
                                            </li>
                                            <li>
                                                Trouver les intervenants spécialistes et qualifiés dont votre établissement supérieur a besoin,
                                            </li>
                                            <li>
                                                Donner de la visibilité à vos domaines d’expertise et de qualification en matière d’enseignement dans le supérieur ; vous permet référencez votre CV, votre parcours de formation, votre expérience en tant qu’intervenant dans le supérieur. Les intervenants sont donc invités également à s’inscrire et à s’ouvrir un compte,
                                            </li>
                                            <li>
                                                Trouver des opportunités d’intervention dans le supérieur en tant que spécialiste,
                                            </li>
                                            <li>
                                                Donner de la visibilité à vos opportunités de grands projets à réaliser dans le supérieur en tant que partenaires dans l’éducation et l’enseignement supérieur. Les partenaires peuvent donc poster leurs annonces – projets ; leurs appels d’offre ; leurs appels à manifestation d’intérêt,
                                            </li>
                                            <li>
                                                Donner aussi l’opportunité aux établissements d’enseignement supérieur, universités comme grandes écoles, de faire leur promotion, la promotion de leurs programmes à travers des publicités et des annonces, (…).
                                            </li>
                                        </ul>
                                    </li>
                                    <br>
                                    <li>
                                        Les parties prenantes de Sup’Connexion sont tenues de traiter toutes les données personnelles d’un candidat ou candidate ou établissement accessibles par le Portail comme strictement confidentielles. Ces données ne doivent pas être utilisées ou traitées à d’autres fins que celles mentionnées ci-dessus,
                                    </li>
                                    <br>
                                    <li>
                                        Comme le nom l’indique, Sup’Connexion vise essentiellement à connecter les Etablissements du supérieur en Afrique (Employeurs) et les Intervenants (spécialistes internationaux africains), ainsi qu’à donner l’opportunité aux partenaires du monde académique de pouvoir publier des annonces sur des projets dans le supérieur et de recruter les compétences disponibles. Nous n’assumons aucune responsabilité quant au niveau de succès de l’utilisation de nos Services,
                                    </li>
                                    <br>
                                    <li>
                                        Tout intervenant ou tout établissement du supérieur est libre de collaborer avec Sup’Connexion, mais aucun remboursement ne sera accordé en cas d’exploitation insuffisance et inefficace de nos bases de données pour atteindre les résultats que vous souhaiteriez,
                                    </li>
                                    <br>
                                    <li>
                                        Tout établissement enregistré sur notre portail accorde à Sup’Connexion une autorisation mondiale, sans redevances et non exclusive d’utiliser, d’adapter et d’afficher publiquement son logo d’entreprise sur le Portail et d’incorporer ce contenu dans d’autres réalisations sur tout format ou support connu actuellement ou développé ultérieurement uniquement dans le but de promouvoir le Portail.
                                    </li>
                                </ul>
                            </li>
                            <br>
                            <li>Formalisation de notre collaboration</li>
                            <br>
                            <li>Facturation de nos services et paiement</li>
                            <br>
                            <li>Nos différentes responsabilité inhérentes à l’activité</li>
                            <br>
                            <li>Modifications des CGV</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
