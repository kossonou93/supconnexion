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
                    <h4 class="page-title">Ajouter un Projet Academique</h4>
					<div class="row">
						<div class="col-md-12">
                        <form action="{{ route('academiques.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
							<div class="card card-with-nav">
								<div class="card-body">
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Titre*</label>
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
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Date de Publication</label>
												<input type="datetime-local" class="form-control" name="date_pub">
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
			</div>
			
		</div>
		
		<!-- Custom template | don't include it in your project! -->
		@include('admin.part.settings')
		<!-- End Custom template -->
	</div>
</div>
<!--   Core JS Files   -->
@include('admin/part/footer')