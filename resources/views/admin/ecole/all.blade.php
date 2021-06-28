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
										<h4 class="card-title">Toutes les Ecoles</h4>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<th>Nom</th>
													<th>Email</th>
													<th>Téléphone</th>
													<th>Adresse</th>
													<th>Supprimer</th>
												</tr>
											</thead>
											<tbody>
												@foreach ( $ecoles as $ecole )
													<tr>		
														<td>{{ $ecole->name }}</td>
														<td>{{ $ecole->email }}</td>
														<td>{{ $ecole->phone }}</td>
														<td>{{ $ecole->address }}</td>
														<td>
															<div class="form-button-action">
																<form action="{{ route('admin.ecole.destroy', $ecole->id)}}" method="post" style="display: inline-block">
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