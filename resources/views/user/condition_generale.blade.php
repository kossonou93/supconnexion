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
            <h2>@lang('public.conditionGle')</h2>
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
                    <!--<p class="text-justify" style="font-weight: bold; font-family: 'Comic Sans MS';"><span style="font-size: 18px; font-family: 'Comic Sans MS'; color: black">@lang('public.pageContient') </span>
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
                                            <th scope="row">@lang('public.accesIllimite')</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.accesProfil')</th>
                                            <td>@lang('public.resume')</td>
                                            <td>100 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row" style="color: black;">@lang('public.acces3Mois')</th>
                                            <td>@lang('public.accesProfilComplet')</td>
                                            <td>3 500 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.acces6Mois')</th>
                                            <td>@lang('public.accesProfilComplet')</td>
                                            <td>6 500 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.acces12Mois')</th>
                                            <td>@lang('public.accesProfilComplet')</td>
                                            <td>12 500 €</td>
                                        </tr>
                                        <tr style="color: red;" class="bg-info">
                                            <th scope="row">@lang('public.serviceRecrutement')</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.serviceRecrutement')</th>
                                            <td>@lang('public.trouverProfilRechercher')</td>
                                            <td>5 000 €</td>
                                        </tr>
                                        <tr class="bg-info" style="color: red;">
                                            <th scope="row">@lang('public.servicePub')</th>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.servicePub1Mois')</th>
                                            <td>@lang('public.partenaireOpportunite')</td>
                                            <td>5 000 €</td>
                                        </tr>
                                        <tr style="color: black;">
                                            <th scope="row">@lang('public.servicePub3Mois')</th>
                                            <td>@lang('public.partenaireOpportunite')</td>
                                            <td>10 000 €</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <br>
                            <li>@lang('public.differentResp') <br>
                                <ul style="color: #371F57; font-size: 17px">
                                   <li>
                                        @lang('public.deployonsEffort') 
                                   </li>
                                   <br>
                                   <li>
                                        @lang('public.acceptonsRespo')
                                   </li>
                                </ul>
                            </li>
                            <br>
                            <li>@lang('public.modifCGV') <br>
                                <span style="color: #371F57; font-size: 17px">
                                    @lang('public.reviserCGV')
                                </span>
                            </li>
                        </ul>
                    </p>-->
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
