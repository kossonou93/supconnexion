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
														OFFRES
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
															<th>Intitule</th>
															<th>Description</th>
															<th>Date Limite</th>
															<th>Editer</th>
															<th>Supprimer</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$i=1;
														?>
														@foreach ( $annonces as $annonce )
															@if ($annonce->ecole_id == Auth::user()->id)
															<tr>
																<td>
																	<?php
																		echo $i;
																		++$i;
																	?>
																</td>		
																<td>
																	{{$annonce->intitule}}
																</td>
																<td>
																	{{$annonce->description}}
																</td>
																<td>
																	{{$annonce->date_limite}}
																</td>
																<td>
																	<div class="form-button-action">
																		<a href="{{ route('annonces.show',$annonce->id)}}" class="btn btn-primary btn-sm" data-original-title="Editer">
																			Editer
																		</a>
																	</div>
																</td>
																<td>
																	<div class="form-button-action">
																		<form action="{{ route('annonces.destroy', $annonce->id)}}" method="post" style="display: inline-block">
																			@csrf
																			@method('DELETE')
																			<button class="btn btn-danger btn-sm" type="submit">Supprimer</button>
																		</form>
																	</div>
																</td>
															</tr>
															@endif
														@endforeach
													</tbody>
												</table>
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