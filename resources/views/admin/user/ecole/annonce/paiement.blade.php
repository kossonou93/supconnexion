@include('admin/part/head')
<body>
	@php
        $stripe_key = 'pk_test_25jwDLCJXdMgDWlc8JnE8ShD006Yp8Nvds';
    @endphp
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
														PAIEMENT
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<div class="container-fluid">
													<div class="row justify-content-center">
														<div class="col-12 col-lg-11">
															<div class="card card0 rounded-0">
																<div class="row">
																	<div class="col-md-5 d-md-block d-none p-0 box">
																		<div class="card rounded-0 border-0 card1" id="bill">
																			<h3 id="heading1">Formulaire de Paiement</h3>
																			<div class="row">
																				<div class="col-lg-5 col-4 mt-4">
																					<h2 class="bill-head">Nom :</h2>
																				</div>
																				<div class="col-lg-7 col-8 mt-4">
																					<h2 class="bill-head">{{$ecole->name}}</h2>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-5 col-4 mt-4">
																					<h4 class="bill-head">Email :</h4>
																				</div>
																				<div class="col-lg-7 col-8 mt-4">
																					<h5 class="bill-head">{{$ecole->email}}</h5>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-5 col-4 mt-4">
																					<h2 class="bill-head">Téléphone :</h2>
																				</div>
																				<div class="col-lg-7 col-8 mt-4">
																					<h2 class="bill-head">{{$ecole->phone}}</h2>
																				</div>
																			</div>
																			<div class="row">
																				<div class="col-lg-5 col-4 mt-4">
																					<h2 class="bill-head">Adresse :</h2>
																				</div>
																				<div class="col-lg-7 col-8 mt-4">
																					<h2 class="bill-head">{{$ecole->address}}</h2>
																				</div>
																			</div>
																			<div class="row red-bg" style="margin-top: 100px;">
																				<div class="col-lg-5 col-4 mt-4">
																					<p class="bill-hed" style="font-size: 20px" id="total-label">Prix Total</p>
																				</div>
																				<div class="col-lg-7 col-8 mt-4">
																					<h2 class="bill-head" style="font-size: 30px" id="total">{{$offre}} €</h2>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-md-7 col-sm-12 p-0 box">
																		<div class="card rounded-0 border-0 card2" id="paypage">
																			<div class="form-card">
																				<h2 id="heading2" class="text-danger">Méthode de Paiement</h2>
																				<form action="{{ route('paiement.intervenants.store', ['post' => $offre]) }}" method="post" enctype="multipart/form-data">
																					@csrf
																					<div class="radio-group">
																						<div class='radio' data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
																						<div class='radio' data-value="paypal"><img src="https://i.imgur.com/5QFsx7K.jpg" width="200px" height="60px"></div> <br>
																					</div> <label class="pay">Name on Card</label> <input type="text" name="holdername" placeholder="John Smith">
																					<div class="row">
																						<div class="col-8 col-md-6"> <label class="pay">Card Number</label> <input type="text" name="cardno" id="cr_no" placeholder="0000-0000-0000-0000" minlength="19" maxlength="19"> </div>
																						<div class="col-4 col-md-6"> <label class="pay">CVV</label> <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3"> </div>
																					</div>
																					<div class="row">
																						<div class="col-md-12"> <label class="pay">Expiration Date</label> </div>
																						<div class="col-md-12"> <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5"> </div>
																					</div>
																					<div class="row">
																						<div class="col-md-6"> <input type="submit" value="EFFECTUER PAIEMENT &nbsp; &#xf178;" class="btn btn-info placeicon"> </div>
																					</div>
																				</form>
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