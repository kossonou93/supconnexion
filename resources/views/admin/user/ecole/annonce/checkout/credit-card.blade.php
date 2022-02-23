<!--<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stripe Payment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>-->
@include('admin/part/head')
<body>
    @php
        $stripe_key = 'pk_test_25jwDLCJXdMgDWlc8JnE8ShD006Yp8Nvds';
    @endphp
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <div class="wrapper">

        @include('admin/user/mainheader')

					<!-- Sidebar -->
		@include('admin/user/ecole/sidebar')

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
														@lang('public.paiement')
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											
											<div class="container" style="margin-top:10%;margin-bottom:10%">
												<div class="row justify-content-center">
													<div class="col-md-12">
														<div class="">
															<h2 id="heading2" class="text-danger">@lang('public.methodePaiement') </h2>
														</div>
														<div class="card">
															<form action="{{route('checkout.credit-card', \Crypt::encrypt(Auth::user()->id) )}}"  method="post" id="payment-form">
																@csrf                    
																<div class="form-group">
																	<div class="card-header">
																		<label for="card-element">
																			@lang('public.entrezInfoCarte')
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
																> @lang('public.effectuerPaiement') </button>
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