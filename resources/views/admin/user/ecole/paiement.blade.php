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
														PAIEMENT
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
                                                <form action="{{ route('paiement.intervenants.store', ['post' => $offre]) }}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="row mt-3">
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Nom</label>
															<input type="text" class="form-control" name="name" value="">
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Email</label>
															<input type="email" class="form-control" name="email" value="" disabled="disabled">
														</div>
													</div>
												</div>
												<div class="row mt-3">
													<div class="col-md-12">
														<div class="form-group form-group-default">
															<label>Adresse</label>
															<input type="text" class="form-control" value="" name="address">
														</div>
													</div>
												</div>
												<div class="row mt-3">
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Téléphone 1</label>
															<input type="number" class="form-control" value="" name="phone" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group form-group-default">
															<label>Téléphone 2</label>
															<input type="number" class="form-control" value="" name="contact">
														</div>
													</div>
												</div>
												<br><br><br>
												<div class="text-right mt-3 mb-3">
													<button class="btn btn-success">Valider</button>
													<button class="btn btn-danger">Annuler</button>
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
	
<!--   Core JS Files   -->
@include('admin/part/footer')