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
									<div class="card-header bordr-card">
										<div class="row row-nav-line">
											<ul class="nav nav-tabs nav-line nav-color-secondary" id="myTab" role="tablist">
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														PAIEMENT
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body bordr-card">
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
																				<form action="{{route('checkout.intervenant', \Crypt::encrypt(Auth::user()->id))}}"  method="post" id="payment-form">
																					@csrf                    
																					<div class="form-group">
																						<div class="card-header">
																							<label for="card-element">
																								Entrez les informations de votre carte de crédit
																							</label>
																						</div>
																						<div class="card-body">
																							<div id="card-element">
																							<!-- A Stripe Element will be inserted here. -->
																							</div>
																							<!-- Used to display form errors. -->
																							<div id="card-errors" role="alert"></div>
																							<input type="hidden" name="plan" value="" />
																						</div>
																					</div>
																					<div class="card-footer">
																					<button
																					id="card-button"
																					class="btn btn-dark"
																					type="submit"
																					data-secret="{{ $intent }}"
																					> EFFECTUER PAIEMENT </button>
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
	
	<script src="https://js.stripe.com/v3/"></script>
    <script>
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)

        var style = {
            base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
    
        const stripe = Stripe('{{ $stripe_key }}', { locale: 'en' }); // Create a Stripe client.
        const elements = stripe.elements(); // Create an instance of Elements.
        const cardElement = elements.create('card', { style: style }); // Create an instance of the card Element.
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
    
        cardElement.mount('#card-element'); // Add an instance of the card Element into the `card-element` <div>.
    
        // Handle real-time validation errors from the card Element.
        cardElement.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
    
        // Handle form submission.
        var form = document.getElementById('payment-form');
    
        form.addEventListener('submit', function(event) {
            event.preventDefault();
    
        stripe.handleCardPayment(clientSecret, cardElement, {
                payment_method_data: {
                    //billing_details: { name: cardHolderName.value }
                }
            })
            .then(function(result) {
                console.log(result);
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    console.log(result);
                    form.submit();
                }
            });
        });
    </script>
<!--   Core JS Files   -->
@include('admin/part/footer')