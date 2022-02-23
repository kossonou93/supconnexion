@include('admin/part/head')
<body>
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
		<!--<div class="row">
			<div class="col-sm-12 col-md-12">
				@if ($message = Session::get('success'))
					<div class="alert alert-success">
						{{ $message }}
					</div>
				@endif
			</div>
		</div>-->
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
																<h3 style='font-weight: bold; color:#371F57; font-family: "Comic Sans MS"'>@lang('public.renseignezModif')</h3>
																<br>
																<form action="{{ route('ecole.update.submit', ['post' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
																	{{ csrf_field() }}
																	{{ method_field('PUT') }}
																	<div class="row mt-3">
																		<div class="col-md-6">
																			<div class="form-group form-group-default bordr">
																				<label>@lang('public.nom')</label>
																				<input type="text" class="form-control input" name="name" value="{{ Auth::user()->name }}">
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group form-group-default bordr">
																				<label>Email</label>
																				<input type="email" class="form-control input" name="email" value="{{ Auth::user()->email }}" disabled="disabled">
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
																				<label>@lang('public.ville')</label>
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
																		<div class="col-md-12">
																			<div class="form-group form-group-default bordr">
																				<label>@lang('public.adresse')</label>
																				<input type="text" class="form-control input" value="{{ Auth::user()->address }}" name="address">
																			</div>
																		</div>
																	</div>
																	<div class="row mt-3">
																		<div class="col-md-6">
																			<div class="form-group form-group-default bordr">
																				<label>@lang('public.phone') 1</label>
																				<input type="number" class="form-control input" value="{{ Auth::user()->phone }}" name="phone" required>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group form-group-default bordr">
																				<label>@lang('public.phone') 2</label>
																				<input type="number" class="form-control input" value="{{ Auth::user()->contact }}" name="contact">
																			</div>
																		</div>
																	</div>
																	<div class="row mt-3">
																		<div class="col-md-12">
																			<div class="form-group form-group-default bordr">
																				<label>Logo</label>
																				<br>
																				<input id="logo" type="file" name="logo" class="form-control-file" placeholder="{{ Auth::user()->logo }}" value="{{ Auth::user()->logo }}"><span for="logo" class="form-control-file input">{{ Auth::user()->logo }}</span>
																			</div>
																		</div>
																	</div>
																	<div class="row mt-3 mb-1">
																		<div class="col-md-12">
																			<div class="form-group form-group-default bordr">
																				<label>@lang('public.aproposEcole')</label>
																				<textarea class="form-control input" name="about" placeholder="" rows="3" value="{{ Auth::user()->about }}">{{ Auth::user()->about }}</textarea>
																			</div>
																		</div>
																	</div>
																	<div class="row mt-3">
																		<label class="col-sm-7 col-form-label">@lang('public.filiereFormation')</label>
																		<div class="col-sm-5">
																			<div class="md-form mt-0">
																				<select id='testSelectc' name="disciplines[]" multiple class="form-control">
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
																	<div class="row mt-3">
																		<label class="col-sm-7 col-form-label">@lang('public.langueEns')</label>
																		<div class="col-sm-5">
																			<div class="md-form mt-0">
																				<select id='testSelecta' name="langues[]" multiple class="form-control">
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
																				<select id='testSelectb' name="horaires[]" multiple class="form-control">
																				@foreach ( $horaires as $horaire )
																					<option value='{{ $horaire->id }}'
																						@foreach ( $hors as $hor )
																							@if ($horaire->id == $hor->id)
																								selected
																							@endif
																						@endforeach
																					>{{ $horaire->{'titre_'.$local} }}</option>
																				@endforeach 
																				</select>
																			</div>
																		</div>
																	</div>
																	<br><br><br>
																	<div class="text-right mt-3 mb-3">
																		<button class="btn btn-success btn-rounded">@lang('public.envoyez')</button>
																		<button class="btn btn-danger btn-rounded">@lang('public.annulez')</button>
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
																		<img @if (Auth::user()->logo == NULL)
																				src="{{ asset('supconnexion/public/uploads/photo/profil/Placeholder.png') }}"
																			@else
																				src="{{ asset('supconnexion/public/uploads/photo/logo/'.Auth::user()->logo) }}"
																			@endif
																		 alt="" class="avatar-img rounded-circle">
																	</div>
																</div>
															</div>
															<div class="card-body" style="margin-top:50px">
																<div class="user-profile text-center">
																	<div class="name">{{ Auth::user()->name }}</div>
																	<div class="job">{{ Auth::user()->address }}</div>
																	<div class="desc"></div>
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
									<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
										<div class="card bordr-card">
											<div class="card-body">
												<br>
												<h3 style='font-weight: bold; color:#371F57; font-family: "Comic Sans MS"'>@lang('public.selectionTypeEcole')</h3>
												<form action="{{ route('ecole.formation.update.submit', ['post' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
													{{ csrf_field() }}
													{{ method_field('PUT') }}
													<div class="card-body">
														<div class="row mt-3">
															<div class="col-sm-12">
															@foreach ( $formations as $formation )
																<input type="checkbox" name="formations[]" value="{{ $formation->id }}"
																	@foreach ( $ecoles as $ecole )
																		@if ($formation->id == $ecole->id)
																			checked
																		@endif
																	@endforeach  
																>&nbsp;{{ $formation->type }}<br>
															@endforeach  
															</div>
														</div>
													</div>
												
													<div class="row mt-3">
														<div class="col-md-12">
															<div class="card card-image">
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
		
		<!-- Custom template | don't include it in your project! -->
		<!--<div class="custom-template">
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
		</div>-->
		<!-- End Custom template -->
	</div>
</div>
<!--   Core JS Files   -->
@include('admin/part/footer')