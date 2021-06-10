@include('admin/part/head')

<body>
<!--	<div class="contenu">-->
		<div class="loader_bg">
			<div class="loader"></div>
		</div>
		<div class="wrapper">
			<!--
				Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
			-->
			@include('admin/user/mainheader')

					<!-- Sidebar -->
			@include('admin/user/ecole/sidebar')
			<!-- End Sidebar -->

			<div class="main-panel">
				<div class="content">
					<div class="page-inner">
					@include('admin/user/menu1')
						<div class="row">
							<div class="col-md-12">
								<div class="card card-with-nav">
									<div class="card-header">
										<div class="row row-nav-line">
											<ul class="nav nav-tabs nav-line nav-color-secondary" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														AJOUTER UNE ANNONCE
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<br>
												<div class="demo">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="pricingTable">
                                                                    <div class="pricingTable-header">
                                                                        <h3 class="title">Standard</h3>
                                                                    </div>
                                                                    <div class="price-value">10,00 $</div>
                                                                    <ul class="pricing-content">
                                                                        <li style="color:black; font-family: 'Comic Sans MS'">1 mois d'autorisation pour faire passer votre annonce</li>
                                                                        <li>NB: Vous avez la possiblité de rénouveler votre offre</li>
                                                                        <!--<li class="disable">50GB Bandwidth</li>
                                                                        <li>Maintenance</li>
                                                                        <li class="disable">15 Subdomains</li>-->
                                                                    </ul>
                                                                    <div class="pricingTable-signup">
                                                                        <a href="{{ route('paiement.annonces.show',1)}}">Souscrire</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="pricingTable blue">
                                                                    <div class="pricingTable-header">
                                                                        <h3 class="title">Business</h3>
                                                                    </div>
                                                                    <div class="price-value">20,00 $</div>
                                                                    <ul class="pricing-content">
                                                                        <li style="color:black; font-family: 'Comic Sans MS'">3 mois d'autorisation pour faire passer votre annonce</li>
                                                                        <li>NB: Vous avez la possiblité de rénouveler votre offre</li>
                                                                    </ul>
                                                                    <div class="pricingTable-signup">
                                                                        <a href="{{ route('paiement.annonces.show',2)}}">Souscrire</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="pricingTable green">
                                                                    <div class="pricingTable-header">
                                                                        <h3 class="title">Premium</h3>
                                                                    </div>
                                                                    <div class="price-value">30,00 $</div>
                                                                    <ul class="pricing-content">
                                                                        <li style="color:black; font-family: 'Comic Sans MS'">6 mois d'autorisation pour faire passer votre annonce</li>
                                                                        <li>NB: Vous avez la possiblité de rénouveler votre offre</li>
                                                                    </ul>
                                                                    <div class="pricingTable-signup">
                                                                        <a href="{{ route('paiement.annonces.show',3)}}">Souscrire</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br><br><br>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!--   Core JS Files   -->
@include('admin/part/footer')