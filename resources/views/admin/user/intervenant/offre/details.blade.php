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
														@lang('public.offre')
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="card bordr-card">
                                                <div class="card-body">
                                                    <h4></h4>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Intitulé</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $annonce->{'intitule_'.$local} }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Description</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $annonce->{'description_'.$local} }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>@lang('public.ecole')</label>
                                                                        <br>
                                                                        @foreach ($ecoles as $ecole)
                                                                            @if ($ecole->id == $annonce->ecole_id)
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{$ecole->name}}</h3>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Langues</label>
                                                                        <br>
                                                                        @foreach ($langues as $langue)
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{$langue->{'name_'.$local} }}</h3>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Disciplines</label>
                                                                        <br>
                                                                        @foreach ($disciplines as $discipline)
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{$discipline->name}}</h3>
                                                                            <br><br>
                                                                        @endforeach 
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Interventions</label>
                                                                        <br>
                                                                        @foreach ($interventions as $intervention)
                                                                            <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{$intervention->{'type_'.$local} }}</h3>
                                                                            <br><br>
                                                                        @endforeach 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Dossier</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{$annonce->{'dossier_'.$local} }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Adresse</label>
                                                                        <br>
                                                                        <h2 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{$annonce->adresse}}</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Date de Publication</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><?php
                                                                            echo date("d F Y", strtotime(" $annonce->created_at "));
                                                                        ?></h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Date de Limite</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><?php
                                                                            echo date("d F Y", strtotime(" $annonce->date_limite "));
                                                                        ?></h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <br><br>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card card-profile card-secondary">
                                                                <div class="card-header" style="background-image: url('admini/assets/img/blogpost.jpg')">
                                                                    <div class="profile-picture">
                                                                        <img src="{{ asset('supconnexion/public/uploads/image/annonce/'.$annonce->image) }}" class="card-img-top" alt="Wild Landscape" data-placeholder="{{ asset('supconnexion/public/uploads/photo/profil/Placeholder.png') }}">
                                                                    </div>
                                                                </div>
                                                                <div class="card-body">
                                                                    
                                                                </div>
                                                                <div class="card-footer">
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
				</div>
			</div>
		</div>
	</div>
	
<!--   Core JS Files   -->
@include('admin/part/footer')