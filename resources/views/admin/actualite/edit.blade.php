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
                    <h4 class="page-title">Editer Actualité</h4>
					<div class="row">
						<div class="col-md-12">
							<form action="{{ route('actualites.update',$actualite->id) }}" method="post" enctype="multipart/form-data">
								@csrf
								@method('PUT')
								<div class="card card-with-nav">
									<div class="card-body">
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Titre</label>
													<input type="text" class="form-control" value="{{ $actualite->titre }}" name="titre" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Auteur</label>
													<input type="text" class="form-control" name="auteur" value="{{ $actualite->auteur }}">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Sous Titre</label>
													<input type="text" class="form-control" value="{{ $actualite->soustitre }}" name="soustitre">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Modifier le texte de l'actualité</label>
													<textarea class="form-control" name="texte" value="{{ $actualite->texte }}" rows="3">{{ $actualite->texte }}</textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-group-default">
													<label>Image</label>
													<br>
													<input type="file" name="photo" value="{{ $actualite->photo }}" class="form-control-file" required>
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