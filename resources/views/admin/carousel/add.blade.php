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
                    <h4 class="page-title">Ajouter une Image au carousel</h4>
					<div class="row">
						<div class="col-md-8">
                        <form action="{{ route('carousels.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="card card-with-nav">
								<div class="card-body">
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Titre</label>
												<input type="text" class="form-control" name="titre">
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
												<label>Ajouter un texte à la Photo</label>
												<textarea class="form-control" name="texte" rows="3"></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Image</label>
												<br>
												<input type="file" name="photo" class="form-control-file" required>
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