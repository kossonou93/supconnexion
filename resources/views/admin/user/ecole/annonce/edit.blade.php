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
									<div class="card-header bordr-card">
										<div class="row row-nav-line">
											<ul class="nav nav-tabs nav-line nav-color-secondary" id="myTab" role="tablist">
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														EDITER ANNONCE
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
										<div class="card bordr-card bordr-card">	
											<div class="card-body">
												<form action="{{ route('annonces.update',$annonce->id) }}" method="post" enctype="multipart/form-data">
													{{ csrf_field() }}
													{{ method_field('PUT') }}
													<div class="row mt-3">
														<div class="col-md-8">
															<div class="form-group form-group-default bordr">
																<label>Intitulé de l'annonce</label>
																<input type="text" class="form-control input" name="intitule" value="{{ $annonce->{'intitule_'.$local} }}" required>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-8">
															<div class="form-group form-group-default bordr">
																<label>Description *</label>
																<textarea class="form-control input" name="description" placeholder="" rows="3" value="{{ $annonce->{'description_'.$local} }}" required>{{ $annonce->{'description_'.$local} }}</textarea>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-8">
															<div class="form-group form-group-default bordr">
																<label>Date limite *</label>
																<input type="date" class="form-control input" name="date_limite" value="{{ $annonce->date_limite }}" required>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<label class="col-sm-5 col-form-label">Domaine(s) d'intervention pour le poste *</label>
														<div class="col-sm-5">
															<div class="md-form mt-0">
																<select id='testSelect8' name="disciplines[]" multiple class="form-control" required>
																	@foreach ( $disciplines as $discipline )
																		<option value='{{ $discipline->id }}'
																			@foreach ( $discips as $discip )
																				@if ($discipline->id == $discip->id)
																					selected
																				@endif
																			@endforeach
																			>{{ $discipline->name }}
																		</option>
																	@endforeach
																</select>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<label class="col-sm-5 col-form-label">Langue(s) *</label>
														<div class="col-sm-5">
															<div class="md-form mt-0">
																<select id='testSelect5' name="langues[]" multiple class="form-control" required>
																	@foreach ( $langues as $langue )
																		<option value='{{ $langue->id }}'
																			@foreach ( $langs as $lang )
																				@if ($langue->id == $lang->id)
																					selected
																				@endif
																			@endforeach
																			>{{ $langue->name }}
																		</option>
																	@endforeach
																</select>
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<label class="col-sm-5 col-form-label">Type(s) d'intervention *</label>
														<div class="col-sm-5">
															<div class="md-form mt-0">
																<select id='testSelecte' name="interventions[]" multiple class="form-control" required>
																	@foreach ( $interventions as $intervention )
																		<option value='{{ $intervention->id }}'
																		@foreach ( $inters as $inter )
																				@if ($intervention->id == $inter->id)
																					selected
																				@endif
																			@endforeach
																			>{{ $intervention->type }}
																		</option>
																	@endforeach 
																</select>
															</div>
														</div>
													</div>
													<div class="row mt-3" style="display:none">
														<label class="col-sm-4 col-form-label"></label>
														<div class="col-sm-8">
															<div class="md-form mt-0">
																<input type="text" name="ecole_id" value="{{ Auth::user()->id }}" class="form-control" placeholder="">
															</div>
														</div>
													</div>
													<div class="row mt-3">
														<div class="col-md-8">
															<div class="form-group form-group-default bordr">
																<label>Ajouter Image</label>
																<br>
																<input type="file" name="image" class="form-control-file input" value="{{ Auth::user()->image }}" placeholder="sélectionnez une image">
															</div>
														</div>
													</div>
													<br><br><br>
													<div class="text-left mt-3 mb-3">
														<button class="btn btn-success">Valider</button>
														&nbsp;&nbsp;&nbsp;
														<button class="btn btn-danger">Annuler</button>
													</div>
												</form>
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