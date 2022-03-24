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
			@include('admin/user/intervenant/sidebar')
			

			<div class="main-panel">
				<div class="content">
					<div class="page-inner">
					
						<div class="row">
							<div class="col-md-12">
								<div class="card card-with-nav">
									<div class="card-header bordr-card">
										<div class="row row-nav-line">
											<ul class="nav nav-tabs nav-line nav-color-secondary" id="myTab" role="tablist">
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link active show" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														<i class="fas fa-user-cog"></i>
														@lang('public.profil')
													</a>
												</li>
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="profile-tab" href="#profile" role="tab" aria-selected="false">
													<i class="fas fa-graduation-cap"></i>
													@lang('public.diplome')
													</a>
												</li>
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="experience-tab" href="#experience" role="tab" aria-selected="false">
													<i class="fas fa-award"></i>
													@lang('public.experience')
													</a>
												</li>
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="contact-tab" href="#contact" role="tab" aria-selected="false">
													<i class="fas fa-school"></i>
													@lang('public.typeEcole')
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
											<div class="card bordr-card">
												<div class="card-body">
													<div class="row">
														<div class="col-md-8">
															<div class="card">
																<div class="card-body">
																	<br>
																	<h3 style='font-weight: bold; color:#371F57; font-family: "Comic Sans MS"'>@lang('public.renseignModif')</h3>
																	<br>
																	<form action="{{ route('intervenant.update.submit', ['post' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
																		{{ csrf_field() }}
																		{{ method_field('PUT') }}
																		<div class="row mt-3">
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.nom')</label>
																					<input type="text" class="form-control input" name="name" placeholder="@lang('public.nom')" value="{{ Auth::user()->name }}">
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.prenom')</label>
																					<input type="text" class="form-control input" name="last_name" placeholder="@lang('public.prenom')" value="{{ Auth::user()->last_name }}">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<div class="col-md-12">
																				<div class="form-group form-group-default bordr">
																					<label>Email</label>
																					<input type="email" class="form-control input" placeholder="Email" value="{{ Auth::user()->email }}" disabled="disabled" >
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.dateNais')</label>
																					<input type="Date" class="form-control input" name="birth_day" value="{{ Auth::user()->birth_day }}" placeholder="1980-01-01">
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.sexe')</label>
																					<select class="form-control input" value="{{ Auth::user()->sexe }}" name="sexe">
																						<option>@lang('public.male')</option>
																						<option>@lang('public.female')</option>
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.phone') 1</label>
																					<input type="number" class="form-control input" value="{{ Auth::user()->phone }}" name="phone" placeholder="Phone" required>
																				</div>
																			</div>
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.phone') 2</label>
																					<input type="number" class="form-control input" value="{{ Auth::user()->contact }}" name="contact" placeholder="Phone">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.pays')</label>
																					<select name="pays_id" class="form-control input" value="{{ Auth::user()->pays_id }}">
																					@foreach ( $pays as $pay )
																						<option value='{{ $pay->id }}' 
																							@if (Auth::user()->pays_id == $pay->id)
																								selected
																							@endif
																							>{{ $pay->name }}
																						</option>
																					@endforeach
																					</select>
																				</div>
																			</div>
																				
																			<div class="col-md-6">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.villeResidence')</label>
																					<select name="ville_id" class="form-control input" value="{{ Auth::user()->ville_id }}">
																					@foreach ( $villes as $ville )
																						<option value='{{ $ville->id }}' 
																							@if (Auth::user()->ville_id == $ville->id)
																								selected
																							@endif
																							>{{ $ville->name }}
																						</option>
																					@endforeach
																					</select>
																				</div>
																			</div>
																			
																			</div>
																			<div class="row mt-3">
																				<div class="col-md-6">
																					<div class="form-group form-group-default bordr">
																						<label>@lang('public.lienLinkedin')</label>
																						<input type="text" class="form-control input" value="{{ Auth::user()->linkdin }}" name="linkdin" placeholder="Linkdin">
																					</div>
																				</div>
																			
																				<div class="col-md-6">
																					<div class="form-group form-group-default bordr">
																						<label>@lang('public.ajoutCV')</label>
																						<input type="file" name="cv" class="form-control-file" value="{{ Auth::user()->cv }}" placeholder="{{ Auth::user()->cv }}"><span for="cv" class="form-control-file input">{{ Auth::user()->cv }}</span>
																					</div>
																				</div>
																			</div>
																			<div class="row mt-3">
																				<div class="col-md-6">
																					<div class="form-group form-group-default bordr" style="border-radius: 10px; border: 3px solid #ccc;">
																						<a class="btn btn-primary" href="{{Auth::user()->linkdin}}" role="button">@lang('public.visiterLinkedin')</a>
																					</div>
																				</div>
																			
																				<div class="col-md-6">
																					<div class="form-group form-group-default bordr">
																						<a class="btn btn-primary" href="{{ route('downloadfile', 'supconnexion/public/uploads/cv/'.Auth::user()->cv) }}" role="button">@lang('public.telechargeCV') </a>
																					</div>
																				</div>
																			</div>
																		<div class="row mt-3">
																			<div class="col-md-12">
																				<div class="form-group form-group-default bordr" style="border-radius: 10px; border: 3px solid #ccc;">
																					<label for="exampleFormControlFile1">@lang('public.photoProfil')</label>
																					<br>
																					<input type="file" name="photo" class="form-control-file" placeholder="{{ Auth::user()->photo }}" value="{{ Auth::user()->photo }}"><span for="photo" class="form-control-file input">{{ Auth::user()->photo }}</span>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3 mb-1">
																			<div class="col-md-12">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.exEntreprise')</label>
																						<br>
																					<input class="form-control input" type="text" name="fonction" value="{{ Auth::user()->fonction }}">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3 mb-1">
																			<div class="col-md-12">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.parcoursMotivation')</label>
																						<br>
																						<textarea class="form-control input" name="motivation" placeholder="" rows="3" value="{{ Auth::user()->motivation }}">{{ Auth::user()->motivation }}</textarea>
																				</div>
																			</div>
																		</div>
																		
																		<br>
																		<h2 style='font-weight: bold; color:blue; font-family: "Comic Sans MS"'>@lang('public.vosCritere')</h2>
																		
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.typeContrat')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelects' name="contrats[]" multiple class="form-control">
																					@foreach ( $contrats as $contrat )
																						<option value='{{ $contrat->id }}'
																							@foreach ( $conts as $cont )
																								@if ($contrat->id == $cont->id)
																									selected
																								@endif
																							@endforeach
																						>{{ $contrat->{'type_'.$local} }}</option>
																					@endforeach
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.interventionDistant')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelecte' name="interventions[]" multiple class="form-control">
																					@foreach ( $interventions as $intervention )
																						<option value='{{ $intervention->id }}'
																							@foreach ( $inters as $inter )
																								@if ($intervention->id == $inter->id)
																									selected
																								@endif
																							@endforeach
																							>{{ $intervention->{'type_'.$local} }}
																						</option>
																					@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.disponibiliteAnnee')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect2' name="disponibilites[]" multiple class="form-control">
																					@foreach ( $disponibilites as $disponibilite )
																						<option value='{{ $disponibilite->id }}'
																							@foreach ( $dispos as $dispo )
																								@if ($disponibilite->id == $dispo->id)
																									selected
																								@endif
																							@endforeach
																						>{{ $disponibilite->{'titre_'.$local} }}</option>
																					@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.dureeIntervention')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect3' name="durees[]" multiple class="form-control">
																					@foreach ( $durees as $duree )
																						<option value='{{ $duree->id }}'
																							@foreach ( $durs as $dur )
																								@if ($duree->id == $dur->id)
																									selected
																								@endif
																							@endforeach
																						>{{ $duree->{'type_'.$local} }}</option>
																					@endforeach
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.mesExperiences')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect4' name="texperiences[]" multiple class="form-control">
																					@foreach ( $texperiences as $texperience )
																						<option value='{{ $texperience->id }}'
																							@foreach ( $texps as $texp )
																								@if ($texperience->id == $texp->id)
																									selected
																								@endif
																							@endforeach
																						>{{ $texperience->{'type_'.$local} }}</option>
																					@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.langueEnsei')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect5' name="langues[]" multiple class="form-control">
																					@foreach ( $langues as $langue )
																						<option value='{{ $langue->id }}'
																							@foreach ( $langs as $lang )
																								@if ($langue->id == $lang->id)
																									selected
																								@endif
																							@endforeach
																						>{{ $langue->{'name_'.$local} }}</option>
																					@endforeach
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.plageHoraire')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect6' name="horaires[]" multiple class="form-control">
																					@foreach ( $horaires as $horaire )
																						<option value='{{ $horaire->id }}'
																							@foreach ( $hors as $hor )
																								@if ($horaire->id == $hor->id)
																									selected
																								@endif
																							@endforeach
																						>{{ ($horaire->{'titre_'.$local}) }}</option>
																					@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.remuneration')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect7' name="remunerations[]" multiple class="form-control">
																						@foreach ( $remunerations as $remuneration )
																							<option value='{{ $remuneration->id }}'
																								@foreach ( $remus as $remu )
																									@if ($remuneration->id == $remu->id)
																										selected
																									@endif
																								@endforeach
																							>{{ $remuneration->{'type_'.$local} }}</option>
																						@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-7 col-form-label">@lang('public.domaineInter')</label>
																			<div class="col-sm-5">
																				<div class="md-form mt-0">
																					<select id='testSelect8' name="disciplines[]" multiple class="form-control">
																						@foreach ( $disciplines as $discipline )
																							<option value='{{ $discipline->id }}'
																								@foreach ( $discips as $discip )
																									@if ($discipline->id == $discip->id)
																										selected
																									@endif
																								@endforeach
																							>{{ $discipline->name }}</option>
																						@endforeach
																					</select>
																				</div>
																			</div>
																		</div>
																		<br>
																		<div class="row mt-3 mb-1">
																			<div class="col-md-12">
																				<div class="form-group form-group-default bordr">
																					<label>@lang('public.domaineComp')</label>
																					<br>
																					<textarea class="form-control input" name="competence" placeholder="Séparez les par des virgules (ex: Mathématique, Anglais)" rows="3" value="{{ Auth::user()->competence }}">{{ Auth::user()->competence }}</textarea>
																				</div>
																			</div>
																		</div>
																		<br>
																		<div class="row mt-3">
																			<div class="col-sm-12">
																				<div class="text-white text-center rgba-stylish-strong py-1 px-4">
																					<div class="py-5">
																						<h5 class="h5 orange-text">
																							<button class="btn btn-success btn-rounded">@lang('public.envoyez')</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																							<button class="btn btn-danger btn-rounded">@lang('public.annulez')</button>
																						</h5>
																					</div>
																				</div>
																			</div>
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
																			<img @if (Auth::user()->photo == NULL)
																				src="{{ asset('supconnexion/public/uploads/photo/profil/Placeholder.png') }}"
																			@else
																				src="{{ asset('supconnexion/public/uploads/photo/profil/'.Auth::user()->photo) }}"
																			@endif
																		 alt="" class="avatar-img rounded-circle">
																		</div>
																	</div>
																</div>
																<div class="card-body" style="margin-top:50px">
																	<div class="user-profile text-center">
																		<div class="name">{{ Auth::user()->last_name }} {{ Auth::user()->name }}</div>
																		<div class="job">{{ Auth::user()->fonction }}</div>
																		<div class="desc">{{ Auth::user()->about }}</div>
																		<div class="social-media">
																			<a class="btn btn-info btn-linkedin btn-sm btn-link" href="{{ Auth::user()->linkdin }}"> 
																				<span class="btn-label just-icon"><i class="flaticon-linkedin"></i> </span>
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
																			<a href="#" class="btn btn-secondary btn-block">@lang('public.telechargerProfil')</a>
																		</div>
																	</div>
																</div>
																<div class="card-footer">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<div class="card bordr-card">
												<div class="card-body">
													<div class="row mt-3">
														<div class="col-sm-4">
														</div>
														<div class="col-sm-4"> 
															<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
																<i class="fa fa-plus"></i>
																@lang('public.ajoutDiplome')
															</button>
														</div>
														<div class="col-sm-4">
														</div>
													</div>
													<br>
													<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
														<div class="modal-dialog" role="document">
															<div class="modal-content">
																<div class="modal-header no-bd">
																	<h5 class="modal-title">
																		<span class="fw-mediumbold">
																			@lang('public.nouveau')
																		</span> 
																		<span class="fw-light">
																			@lang('public.diplome')
																		</span>
																	</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="{{ route('diplomes.store') }}" method="post" enctype="multipart/form-data">
																	@csrf
																	<div class="modal-body">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="form-group form-group-default">
																					<label>@lang('public.ecole')</label>
																					<input type="text" class="form-control" id="ecole" name="ecole" placeholder="@lang('public.nomEcoleDiplome')" required>
																				</div>
																				<div class="form-group form-group-default">
																					<label>Grade</label>
																					<select class="form-control" name="grade" required>
																						<option>BAC</option>
																						<option>BAC+1 </option>
																						<option>BAC+2 </option>
																						<option>BTS </option>
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
																				<div class="form-group form-group-default">
																					<label>@lang('public.titre')</label>
																					<input type="text" class="form-control" name="titre" placeholder="@lang('public.titreDiplome')" required>
																				</div>
																				<div class="form-group form-group-default" style="display:none">
																					<label>@lang('public.titre')</label>
																					<input type="text" class="form-control" name="intervenant_id" value="{{ Auth::user()->id }}" placeholder="@lang('public.titreDiplome')">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer no-bd">
																		<button class="btn btn-primary">@lang('public.envoyez')</button>
																		<button type="button" class="btn btn-danger" data-dismiss="modal">@lang('public.annulez')</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<div class="table-responsive">
														<table id="basic-datatables" class="display table table-striped table-hover" >
															<thead>
																<tr>
																	<th>@lang('public.diplome') Num. </th>
																	<th>@lang('public.ecole')</th>
																	<th>Grade</th>
																	<th>@lang('public.titre')</th>
																	<th>@lang('public.editer')</th>
																	<th>@lang('public.supprimer')</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	$i=1;
																?>
																@foreach ( $diplomes as $diplome )
																	<tr>
																		<td>
																			<?php	
																				echo $i;
																				++$i;
																			?>
																		</td>		
																		<td>{{ $diplome->ecole }}</td>
																		<td>{{ $diplome->grade }}</td>
																		<td>{{ $diplome->titre }}</td>
																		<td>
																			<div class="form-button-action">
																				<a class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-original-title="Editer Diplome" data-target="#editRowModal{{$diplome->id}}">
																					<i class="fa fa-edit"></i>
																				</a>
																			</div>
																		</td>
																		<td>
																			<div class="form-button-action">
																				<form action="{{ route('diplomes.destroy', $diplome->id)}}" method="post" style="display: inline-block">
																					@csrf
																					@method('DELETE')
																					<button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete' data-original-title="Remove">
																						<i class="fa fa-times"></i>
																					</button>
																				</form>
																			</div>
																		</td>
																		@include('admin.intervenant.edit_diplome')
																	</tr>
																@endforeach
															</tbody>
														</table>
													</div>
													
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
											<div class="card bordr-card">
												<div class="card-body">
													<div class="row mt-3">
														<div class="col-sm-4">
														</div>
														<div class="col-sm-4"> 
															<button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target=".bd-example-modal-lg">
																<i class="fa fa-plus"></i>
																@lang('public.ajoutExp')
															</button>
														</div>
														<div class="col-sm-4">
														</div>
													</div>
													<br>
													<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
														<div class="modal-dialog modal-lg">
															<div class="modal-content">
																<div class="modal-header no-bd">
																	<h5 class="modal-title">
																		<span class="fw-mediumbold">@lang('public.new')</span> 
																		<span class="fw-light">@lang('public.experience')</span>
																	</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>
																<form action="{{ route('experience.submit') }}" method="post" enctype="multipart/form-data">
																	@csrf
																	<div class="modal-body">
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.intituleInter')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="text" name="intitule" class="form-control" placeholder="" required>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.entreprise')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="text" name="etablissement" class="form-control" placeholder="" required>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.dateDebutInter')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="date" name="debut" class="form-control" placeholder="">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.dateFinInter')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="date" name="fin" class="form-control" placeholder="">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.courteDesc')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<textarea class="form-control" name="description" rows="3"></textarea>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.typeInter')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<select id='testSelectb' class="form-control" name="interventions[]" >
																						@foreach ( $interventions as $intervention )
																							<option value='{{ $intervention->id }}'
																								>{{ $intervention->{'type_'.$local} }}
																							</option>
																						@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.nbreHInter')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="number" name="heure_intervention" class="form-control" placeholder="">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.modalite')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<select id='testSelecta' class="form-control" name="modalites[]">
																						@foreach ( $modalites as $modalite )
																							<option value='{{ $modalite->id }}'
																								>{{ $modalite->{'type_'.$local} }}
																							</option>
																						@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.niveauEtudiant')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="text" name="niveau_participant" class="form-control" placeholder="">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.niveauResp')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<select class="form-control" name="responsabilites[]" >
																						@foreach ( $responsabilites as $responsabilite )
																							<option
																							>{{ $responsabilite->{'type_'.$local} }}</option>
																						@endforeach 
																					</select>
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.nbreParticipant')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<input type="number" name="nombre_participant" class="form-control" placeholder="">
																				</div>
																			</div>
																		</div>
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.supportInter')</label>
																			<div class="col-sm-2">
																				<div class="md-form mt-0">
																					<select class="form-control" name="support_intervention">
																						<option>@lang('non')</option>
																						<option>@lang('oui')</option>
																					</select>
																				</div>
																			</div>
																			<div class="col-sm-6">
																				<div class="md-form mt-0">
																				</div>
																			</div>
																		</div>				
																		<div class="row mt-3">
																			<label class="col-sm-4 col-form-label">@lang('public.autreExp')</label>
																			<div class="col-sm-8">
																				<div class="md-form mt-0">
																					<textarea class="form-control" name="autre" placeholder="" rows="3"></textarea>
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
																		<button class="btn btn-primary">@lang('public.envoyez')</button>
																		<button type="button" class="btn btn-danger" data-dismiss="modal">@lang('public.annulez')</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
													<div class="table-responsive">
														<table id="add-row" class="display table table-striped table-hover" >
															<thead>
																<tr>
																	<th>@lang('public.experience') Num. </th>
																	<th>@lang('public.intituleInter')</th>
																	<th>@lang('public.entreprise')</th>
																	<th>@lang('public.editer')</th>
																	<th>@lang('public.supprimer')</th>
																</tr>
															</thead>
															<tbody>
																<?php
																	$i=1;
																?>
																@foreach ( $experiences as $experience )
																	<tr>
																		<td>
																			<?php
																				echo $i;
																				++$i;
																			?>
																		</td>		
																		<td>{{ $experience->intitule }}</td>
																		<td>{{ $experience->etablissement }}</td>
																		<td>
																			<div class="form-button-action">
																				<!--<a href="{{ route('experiences.show',$experience->id)}}" class="btn btn-link btn-primary btn-lg" data-original-title="@lang('public.editDip')">
																					<i class="fa fa-edit"></i>
																				</a>-->
																				<a class="btn btn-link btn-primary btn-lg" data-toggle="modal" data-original-title="@lang('public.editExp')" data-target="#editModalExperience{{$experience->id}}">
																					<i class="fa fa-edit"></i>
																				</a>
																			</div>
																		</td>
																		<td>
																			<div class="form-button-action">
																				<form action="{{ route('experiences.destroy', $experience->id)}}" method="post" style="display: inline-block">
																					@csrf
																					@method('DELETE')
																					<button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete' data-original-title="Remove">
																						<i class="fa fa-times"></i>
																					</button>
																				</form>
																			</div>
																		</td>
																		@include('admin.intervenant.edit_experience')
																	</tr>
																@endforeach
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
											<div class="card bordr-card">
												<div class="card-body">
													<br>
													<h4>@lang('public.selectionTypeEcole')</h4>
												
													<form action="{{ route('formation.update.submit', ['post' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
														{{ csrf_field() }}
														{{ method_field('PUT') }}
														<div class="card-body">
															<div class="row mt-3">
																<div class="col-sm-12">
																@foreach ( $formations as $formation )
																	<input type="checkbox" name="formations[]" value="{{ $formation->id }}"
																		@foreach ( $formas as $forma )
																			@if ($formation->id == $forma->id)
																				checked
																			@endif
																		@endforeach 
																	>&nbsp;{{ $formation->type }}<br>
																@endforeach  
																</div>
															</div>
														</div>
														<div class="card-footer">
															
														</div>
												
														<div class="row mt-3">
															<div class="col-md-12">
																<div class="card card-image" style="background-color: white">
																	<div class="text-white text-center rgba-stylish-strong py-1 px-4">
																		<div class="py-5">
																			<h5 class="h5 orange-text">
																				<button class="btn btn-success btn-rounded">@lang('public.envoyez')</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																				<button class="btn btn-danger btn-rounded">@lang('public.annulez')</button>
																			</h5>
																		</div>
																	</div>
																</div>
															</div>
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
	</div>
	
<!--   Core JS Files   -->
@include('admin/part/footer')