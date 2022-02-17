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
                <li><a href="{{route('condition.generale')}}" class="active">@lang('public.conditionGle')</a></li>
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
                                <ul style="color: #371F57; font-size: 17px">
                                    <li>
                                        @lang('public.projetPortailDedieExpertise')
                                        <ul style="color: black; font-size: 16px">
                                            <li>
                                                @lang('public.donnezVisibiliteBesoin')
                                            </li>
                                            <li>
                                                @lang('public.trouvezIntervenantSpecialiste') 
                                            </li>
                                            <li>
                                                @lang('public.donnezVisibiliteDomaine'),
                                            </li>
                                            <li>
                                                @lang('public.trouvezOpportunite'),
                                            </li>
                                            <li>
                                                @lang('public.donnezVisibiliteOpportunite'),
                                            </li>
                                            <li>
                                                @lang('public.donnerOpportunite')
                                            </li>
                                        </ul>
                                    </li>
                                    <br>
                                    <span style="color: black; font-size: 17px">
                                        @lang('public.portailUtiliser')
                                    </span>
                                    <br><br>
                                    <li>
                                        @lang('public.partiePrenante') 
                                    </li>
                                    <br>
                                    <li>
                                        @lang('public.commeIndique') 
                                    </li>
                                    <br>
                                    <li>
                                        @lang('public.toutIntervenant')
                                    </li>
                                    <br>
                                    <li>
                                        @lang('public.toutEtablissement')
                                    </li>
                                </ul>
                            </li>
                            <br>
                            <li>@lang('public.formalisation')<br>
                                <span style="color: #371F57; font-size: 17px">
                                    @lang('public.touteFormalisation')  
                                </span>
                            </li>
                            <br>
                            <li>@lang('public.facturation')  <br>
                                <span style="color: #371F57; font-size: 17px">
                                    @lang('public.prixService')<br><br>  @lang('public.prixAnnonce')
                                </span>
                                <br><br>
                                <table class="table table-bordered" style="text-align: center;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th class="col-md-4">@lang('public.produit')</th>
                                            <th class="col-md-6">description</th>
                                            <th class="col-md-2">@lang('public.prix')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="color: red;" class="bg-info">
                                            <th scope="row">@lang('public.publicationAnnonce')</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.publicationUnMois')</th>
                                            <td>@lang('public.postezPublication')</td>
                                            <td>500 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row" style="color: black;">@lang('public.publicationTroisMois')</th>
                                            <td>@lang('public.postezPublication')</td>
                                            <td>1 600 €</td>
                                        </tr>
                                        <tr style="color: red;" class="bg-info">
                                            <th scope="row"></th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">Accès au profil complet d'un intervenant</th>
                                            <td>CV ; Trouver l'intervenant spécialistes et qualifié dont votre établissement supérieur a besoin</td>
                                            <td>100 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row" style="color: black;">Accès pendant 3 mois</th>
                                            <td>Accès profil complet des intervenants; Trouver les intervenants spécialistes et qualifiés dont votre établissement supérieur a besoin</td>
                                            <td>3 500 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">Accès pendant 6 mois</th>
                                            <td>Accès profil complet des intervenants; Trouver les intervenants spécialistes et qualifiés dont votre établissement supérieur a besoin</td>
                                            <td>6 500 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">Accès pendant 12 mois</th>
                                            <td>Accès profil complet des intervenants; Trouver les intervenants spécialistes et qualifiés dont votre établissement supérieur a besoin</td>
                                            <td>12 500 €</td>
                                        </tr>
                                        <tr style="color: red;" class="bg-info">
                                            <th scope="row">Service de recrutements</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">Service de recrutement</th>
                                            <td>Sup'Connexion se charge de trouver le profil recherché par l'établissement</td>
                                            <td>5 000 €</td>
                                        </tr>
                                        <tr class="bg-info" style="color: red;">
                                            <th scope="row">Service de publicités</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">Service de publicités pour 1 mois</th>
                                            <td>Les partenaires ont l'opportunité de faire leur promotion, la promotion de leurs programmes à travers des publicités et des annonces (une bannière sur notre page d'accueil + un lien vers votre site web)</td>
                                            <td>5 000 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">Service de publicités pour 3 mois</th>
                                            <td>Les partenaires ont l'opportunité de faire leur promotion, la promotion de leurs programmes à travers des publicités et des annonces (une bannière sur notre page d'accueil + un lien vers votre site web)</td>
                                            <td>10 000 €</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <br>
                            <li>Nos différentes responsabilité inhérentes à l’activité <br>
                                <ul style="color: #371F57; font-size: 17px">
                                   <li>
                                        Bien que nous déployons tous les efforts raisonnables pour rendre notre Portail performant, nous déclinons toute responsabilité en cas de dysfonctionnements du Portail causé par des circonstances indépendantes de notre volonté raisonnable, y compris, sans s’y limiter, toute panne ou dysfonctionnement de tout logiciel informatique, équipement, installations ou services de télécommunications et autres,
                                   </li>
                                   <br>
                                   <li>
                                        En outre, nous n’acceptons aucune responsabilité découlant de toute inexactitude ou omission dans l’une des informations sur ce site fournies par vous, tout autre utilisateur du site ou toute autre personne.
                                   </li>
                                </ul>
                            </li>
                            <br>
                            <li>Modifications des CGV <br>
                                <span style="color: #371F57; font-size: 17px">
                                    Nous pouvons réviser nos CGV à tout moment sans préavis. Vous devez consulter cette page de temps en temps et vous assurer que vous êtes au courant de ces changements. 
                                </span>
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
