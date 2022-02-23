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
									<div class="card-header bordr-card">
										<div class="row row-nav-line">
											<ul class="nav nav-tabs nav-line nav-color-secondary" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" style="font-size: 20px; font-weight: 900; color: #371F57;" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														@lang('public.choixForfait')
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body bordr-card">
                                                <br>
                                                <h3 style='font-weight: bold; color:blue; text-align: center; font-family: "Comic Sans MS"'>@lang('public.souscriptionForfait') </h3>
												<br><br><br>
												<div class="demo">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="pricingTable">
                                                                    <div class="pricingTable-header">
                                                                        <h3 class="title">Standard</h3>
                                                                    </div>
                                                                    <div class="price-value">10 000 FCFA</div>
                                                                    <ul class="pricing-content">
                                                                        <li style="font-family: 'Comic Sans MS'"><span style="color: #f6b60b; font-weight: 900">1 @lang('public.mois') </span><span style="color:red">@lang('public.autorisationAnnonce')</span></li>
                                                                        <li style="color:#371F57">@lang('public.possibliteRenouv')</li>
                                                                        <!--<li class="disable">50GB Bandwidth</li>
                                                                        <li>Maintenance</li>
                                                                        <li class="disable">15 Subdomains</li>-->
                                                                    </ul>
                                                                    <div class="pricingTable-signup">
                                                                        <a href="{{ route('checkout.credit',1)}}">@lang('public.souscrire')</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="pricingTable blue">
                                                                    <div class="pricingTable-header">
                                                                        <h3 class="title">Business</h3>
                                                                    </div>
                                                                    <div class="price-value">20 000 FCFA</div>
                                                                    <ul class="pricing-content">
                                                                        <li style="font-family: 'Comic Sans MS'"><span style="color: #f6b60b; font-weight: 900">3 @lang('public.mois') </span><span style="color:red">@lang('public.autorisationAnnonce')</span></li>
                                                                        <li style="color:#371F57">@lang('public.possibliteRenouv')</li>
                                                                    </ul>
                                                                    <div class="pricingTable-signup">
                                                                        <a href="{{ route('checkout.credit',2)}}">@lang('public.souscrire')</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-sm-6">
                                                                <div class="pricingTable green">
                                                                    <div class="pricingTable-header">
                                                                        <h3 class="title">Premium</h3>
                                                                    </div>
                                                                    <div class="price-value">30 000 FCFA</div>
                                                                    <ul class="pricing-content">
                                                                        <li style="font-family: 'Comic Sans MS'"><span style="color: #f6b60b; font-weight: 900">6 @lang('public.mois') </span><span style="color:red">@lang('public.autorisationAnnonce')</span></li>
                                                                        <li style="color:#371F57">@lang('public.possibliteRenouv')</li>
                                                                    </ul>
                                                                    <div class="pricingTable-signup">
                                                                        <a href="{{ route('checkout.credit',3)}}">@lang('public.souscrire')</a>
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