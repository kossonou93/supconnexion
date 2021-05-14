@include('admin/part/head')
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		@include('admin/user/mainheader')

				<!-- Sidebar -->
		@include('admin/user/sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				@include('admin/user/menu1')
					<div class="row">
						<div class="col-md-8">
						<div class="card card-with-nav">
								<div class="card-header">
									<h4 class="page-title">Editer l'expérience</h4>
								</div>
								<div class="card card-with-nav">
									<form action="{{ route('experiences.update',$experience->id) }}" method="post" enctype="multipart/form-data">
										@csrf
										@method('PUT')
										<div class="modal-body">
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Intitulé de l'intervention</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="text" name="intitule" class="form-control" value="{{ $experience->intitule }}" placeholder="" required>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Etablissement ou entreprise</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="text" name="etablissement" class="form-control" value="{{ $experience->etablissement }}" placeholder="" required>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Date de début d'intervention</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="date" name="debut" class="form-control" value="{{ $experience->debut }}" placeholder="">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Date de fin d'intervention / en cours</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="date" name="fin" class="form-control" value="{{ $experience->fin }}" placeholder="">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Courte description</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<textarea class="form-control" name="description" value="{{ $experience->description }}" placeholder="" rows="3">{{ $experience->description }}</textarea>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Type d'intervention</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="text" name="type_intervention" class="form-control" value="{{ $experience->type_intervention }}" placeholder="">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Nombre d'heures d'intervention</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="number" name="heure_intervention" class="form-control" value="{{ $experience->heure_intervention }}" placeholder="">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Modalités</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<select class="form-control" name="modalites[]" >
														@foreach ( $modalites as $modalite )
															<option value='{{ $modalite->id }}'
																@foreach ( $modals as $modal )
																	@if ($modalite->id == $modal->id)
																		selected
																	@endif
																@endforeach
															>{{ $modalite->type }}</option>
														@endforeach 
														</select>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Niveau des étudiants ou des professionnels</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="text" name="niveau_participant" value="{{ $experience->niveau_participant }}" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Niveau de responsabilité</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<select class="form-control" name="responsabilites[]" >
														@foreach ( $responsabilites as $responsabilite )
															<option value='{{ $responsabilite->id }}'
																@foreach ( $respos as $respo )
																	@if ($responsabilite->id == $respo->id)
																		selected
																	@endif
																@endforeach
															>{{ $responsabilite->type }}</option>
														@endforeach 
														</select>
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Nombre de participants à votre intervention</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="number" name="nombre_participant" value="{{ $experience->nombre_participant }}" class="form-control" placeholder="">
													</div>
												</div>
											</div>
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">J'ai créé les supports de l'intervention</label>
												<div class="col-sm-2">
													<div class="md-form mt-0">
														<select class="form-control" value="{{ $experience->support_intervention }}" name="support_intervention">
															<option>NON</option>
															<option>OUI</option>
														</select>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="md-form mt-0">
													</div>
												</div>
											</div>				
											<div class="row mt-3">
												<label class="col-sm-4 col-form-label">Autres expériences notables</label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<textarea class="form-control" name="autre" value="{{ $experience->autre }}" placeholder="" rows="3">{{ $experience->autre }}</textarea>
													</div>
												</div>
											</div>
											<div class="row mt-3" style="display:none">
												<label class="col-sm-4 col-form-label"></label>
												<div class="col-sm-8">
													<div class="md-form mt-0">
														<input type="text" name="intervenant_id" value="{{ Auth::user()->id }}" class="form-control" placeholder="">
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer no-bd">
											<button class="btn btn-primary">Valider</button>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-4">
								<div class="card card-profile card-secondary">
									<div class="card-header" style="background-image: url('admini/assets/img/blogpost.jpg')">
										<div class="profile-picture">
											<div class="avatar avatar-xxl">
												<img src="{{ asset('uploads/photo/profil/'.Auth::user()->photo) }}" alt="" class="avatar-img rounded-circle">
											</div>
										</div>
									</div>
									<div class="card-body" style="margin-top:10px">
										<div class="user-profile text-center">
											<div class="name">{{ Auth::user()->name }}</div>
											<div class="job">{{ Auth::user()->fonction }}</div>
											<div class="desc">{{ Auth::user()->about }}</div>
											<div class="social-media">
												<a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
													<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
												</a>
												<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
													<span class="btn-label just-icon"><i class="flaticon-google-plus"></i> </span> 
												</a>
												<a class="btn btn-primary btn-sm btn-link" rel="publisher" href="#"> 
													<span class="btn-label just-icon"><i class="flaticon-facebook"></i> </span> 
												</a>
												<a class="btn btn-danger btn-sm btn-link" rel="publisher" href="#"> 
													<span class="btn-label just-icon"><i class="flaticon-dribbble"></i> </span> 
												</a>
											</div>
											<div class="view-profile">
												<a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row user-stats text-center">
											<div class="col">
												<div class="number">125</div>
												<div class="title">Post</div>
											</div>
											<div class="col">
												<div class="number">25K</div>
												<div class="title">Followers</div>
											</div>
											<div class="col">
												<div class="number">134</div>
												<div class="title">Following</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Topbar</h4>
						<div class="btnSwitch">
							<button type="button" class="changeMainHeaderColor" data-color="blue"></button>
							<button type="button" class="selected changeMainHeaderColor" data-color="purple"></button>
							<button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeMainHeaderColor" data-color="green"></button>
							<button type="button" class="changeMainHeaderColor" data-color="orange"></button>
							<button type="button" class="changeMainHeaderColor" data-color="red"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
</div>



<!--   Core JS Files   -->
@include('admin/part/footer')