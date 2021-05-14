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
                    <h4 class="page-title">Ajouter un Diplome</h4>
					<div class="row">
						<div class="col-md-8">
                        <form action="{{ route('diplomes.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="card card-with-nav">
								<div class="card-body">
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Ecole</label>
												<input type="text" class="form-control" name="titre" placeholder="Entrez l'école où vous avez obtenu votre diplome">
											</div>
										</div>
                                    </div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Grade</label>
												<select class="form-control" name="grade">
													<option>BAC</option>
													<option>BAC+1 </option>
													<option>BAC+2 </option>
													<option>BAC+3 </option>
													<option>LICENCE </option>
													<option>BAC+4 </option>
													<option>BAC+5 </option>
													<option>MASTER </option>
													<option>BAC+6 </option>
													<option>BAC+7 </option>
													<option>DOCTORAT </option>
												</select>
											</div>
										</div>
                                    </div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Titre</label>
												<input type="text" class="form-control" name="titre" placeholder="Entrez le titre du discipline">
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