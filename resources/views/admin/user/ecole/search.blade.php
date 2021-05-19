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
														INTERVENANTS
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<br>
												<h4></h4>
												<br><br>
												<table id="add-row" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>Offre num. </th>
															<th>Nom</th>
															<th>Fonction</th>
															<th>Voir CV</th>
															<th>En savoir plus</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$i=1;
														?>
														@foreach ( $intervenants as $intervenant )
															<tr>
																<td>
																	<?php
																		echo $i;
																		++$i;
																	?>
																</td>		
																<td>
																	{{$intervenant->name}}
																</td>
																<td>
																	{{$intervenant->fonction}}
																</td>
																<td>
																	<a class="btn btn" href="{{ asset('uploads/cv/'.$intervenant->cv) }}" role="button"><i class="flaticon-file"></i></a>
																</td>
																<td>
                                                                    <a class="btn btn" href="{{ route('details.intervenant',$intervenant->id)}}" role="button">voir plus</a>
																</td>
															</tr>
														@endforeach
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="card card-with-nav">
									<div class="card-header">
										<div class="row row-nav-line">
											<ul class="nav nav-tabs nav-line nav-color-secondary" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														VOIR PLUS D'INTERVENANT
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body">
												<br>
												<div class="row">
													<div class="col-md-4">
														<div class="card card-cascade">

															<!-- Card image -->
															<div class="view view-cascade overlay">
																<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
																<a>
																<div class="mask rgba-white-slight"></div>
																</a>
															</div>

															<!-- Card content -->
															<div class="card-body card-body-cascade text-center">

																<!-- Title -->
																<h4 class="card-title"><strong>Offre Simple</strong></h4>
																<!-- Subtitle 
																<h6 class="font-weight-bold indigo-text py-2">Web developer</h6>-->
																<!-- Text -->
																<p class="card-text">La souscription à cette offre vous donne accèss à retrouver jusqu'à 100 intervenants.
																</p>

																<!-- Facebook 
																<a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
															
																<a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
																
																<a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>
																-->
															</div>

															<!-- Card footer -->
															<div class="card-footer text-muted text-center">
																<a class="btn btn-primary" href="{{ route('paiement.intervenants.show',1)}}" role="button">jusqu'à 100 intervenants</a>
															</div>
														</div>
													</div>
													
													<div class="col-md-4">
														<div class="card card-cascade">

															<!-- Card image -->
															<div class="view view-cascade overlay">
																<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
																<a>
																<div class="mask rgba-white-slight"></div>
																</a>
															</div>

															<!-- Card content -->
															<div class="card-body card-body-cascade text-center">

																<!-- Title -->
																<h4 class="card-title"><strong>Offre Moyenne</strong></h4>
																<!-- Subtitle
																<h6 class="font-weight-bold indigo-text py-2">Web developer</h6> -->
																<!-- Text -->
																<p class="card-text">La souscription à cette offre vous donne accèss à retrouver jusqu'à 200 intervenants.
																</p>

																<!-- Facebook 
																<a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
															
																<a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
																
																<a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>
																-->

															</div>

															<!-- Card footer -->
															<div class="card-footer text-muted text-center">
																<a class="btn btn-success" href="{{ route('paiement.intervenants.show',2)}}" role="button">jusqu'à 200 intervenants</a>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="card card-cascade">

															<!-- Card image -->
															<div class="view view-cascade overlay">
																<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/men.jpg" alt="Card image cap">
																<a>
																<div class="mask rgba-white-slight"></div>
																</a>
															</div>

															<!-- Card content -->
															<div class="card-body card-body-cascade text-center">

																<!-- Title -->
																<h4 class="card-title"><strong>Offre Libre</strong></h4>
																<!-- Subtitle 
																<h6 class="font-weight-bold indigo-text py-2">Web developer</h6>-->
																<!-- Text -->
																<p class="card-text">La souscription à cette offre vous donne accèss à retrouver tous les intervenants.
																</p>

																<!-- Facebook 
																<a type="button" class="btn-floating btn-small btn-fb"><i class="fab fa-facebook-f"></i></a>
															
																<a type="button" class="btn-floating btn-small btn-tw"><i class="fab fa-twitter"></i></a>
																
																<a type="button" class="btn-floating btn-small btn-dribbble"><i class="fab fa-dribbble"></i></a>
																-->

															</div>

															<!-- Card footer -->
															<div class="card-footer text-muted text-center">
																<a class="btn btn-danger" href="{{ route('paiement.intervenants.show',3)}}" role="button">Tous les intervenants</a>
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