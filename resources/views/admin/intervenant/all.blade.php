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
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Tous les Intervenants</h4>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Nom</th>
													<th>Prénom</th>
													<th>Email</th>
													<th>Téléphone</th>
													<th>Supprimer</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $intervenants as $intervenant )
													<tr>		
														<td>{{ $intervenant->name }}</td>
														<td>{{ $intervenant->last_name }}</td>
														<td>{{ $intervenant->email }}</td>
														<td>{{ $intervenant->phone }}</td>
														<td>
															<div class="form-button-action">
																<form action="{{ route('admin.intervenant.destroy', $intervenant->id)}}" method="post" style="display: inline-block">
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