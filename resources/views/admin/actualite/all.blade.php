@include('admin/part/head')
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		@include('admin/part/mainheader')
		@include('admin/part/sidebar')
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					@include('admin/part/menu1')
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Toutes les Actualités</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>
											Ajouter Actualité
										</button>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header no-bd">
													<h5 class="modal-title">
														<span class="fw-mediumbold">
														Nouvelle</span> 
														<span class="fw-light">
															Actualité
														</span>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												 <form action="{{ route('actualites.store') }}" method="post" enctype="multipart/form-data">
													@csrf
													<div class="card card-with-nav">
														<div class="card-body">
															<div class="row mt-3">
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Titre</label>
																		<input type="text" class="form-control" name="titre" required>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Auteur</label>
																		<input type="text" class="form-control" name="auteur">
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Sous Titre</label>
																		<input type="text" class="form-control" name="soustitre">
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Ajouter un texte à l'actualité</label>
																		<textarea class="form-control" name="texte" rows="3"></textarea>
																	</div>
																</div>
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Ajouter Image</label>
																		<br>
																		<input type="file" name="photo" class="form-control-file">
																	</div>
																</div>
															</div>
															<div class="text-center mt-3 mb-3">
																<button class="btn btn-success">Enregistrer</button>
																<button class="btn btn-danger">Annuler</button>
															</div>
														</div>
														
													</div>
												</form>
											</div>
										</div>
									</div>

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Titre</th>
													<th>Editer</th>
													<th>Supprimer</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $actualites as $actualite )
													<tr>		
														<td>{{ $actualite->titre }}</td>
														<td>
															<div class="form-button-action">
																<a href="{{ route('actualites.show',$actualite->id)}}" class="btn btn-link btn-primary btn-lg" data-original-title="Editer Actualite">
																	<i class="fa fa-edit"></i>
																</a>
															</div>
														</td>
														<td>
															<div class="form-button-action">
																<form action="{{ route('actualites.destroy', $actualite->id)}}" method="post" style="display: inline-block">
																	@csrf
																	@method('DELETE')
																	<button class="btn btn-danger btn-sm" type="submit" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-times"></i></button>
																</form>
															</div>
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card card-secondary">
								<div class="card-header">
									<div class="card-title">Daily Sales</div>
									<div class="card-category">March 25 - April 02</div>
								</div>
								<div class="card-body pb-0">
									<div class="mb-4 mt-2">
										<h1>$4,578.58</h1>
									</div>
									<div class="pull-in">
										<canvas id="dailySalesChart"></canvas>
									</div>
								</div>
							</div>
							<div class="card card-info bg-info-gradient">
								<div class="card-body">
									<h4 class="mb-1 fw-bold">Tasks Progress</h4>
									<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
			
		</div>


		
		
		<!-- Custom template | don't include it in your project! -->
		@include('admin.part.settings')
		<!-- End Custom template -->
	</div>
</div>
<!--   Core JS Files   -->
@include('admin/part/footer')