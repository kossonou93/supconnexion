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
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link active show" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														<i class="fas fa-user-cog"></i>
														Profil
													</a>
												</li>
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="profile-tab" href="#profile" role="tab" aria-selected="false">
													<i class="fas fa-graduation-cap"></i>
													Diplômes 
													</a>
												</li>
												<li class="nav-item">
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="contact-tab" href="#contact" role="tab" aria-selected="false">
													<i class="fas fa-school"></i>
													Expériences
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="card bordr-card">
                                                <div class="card-body">
                                                    <h4></h4>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Nom</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->name }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Prénom</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->last_name }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Email</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->email }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Téléphone</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->phone }} / {{ $intervenant->contact }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Fonction</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->fonction }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Résidence</label>
                                                                        <br>
                                                                        @foreach ( $villes as $ville )
                                                                            <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>
                                                                                @if ($intervenant->ville_id == $ville->id)
                                                                                    {{  $ville->name }}
                                                                                @endif
                                                                            </h3>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Date de Naissance</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->birth_day }}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Sexe</label>
                                                                        <br>
                                                                        <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->sexe }}</h3>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3 mb-1">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Présentation brève du parcours et motivations</label>
                                                                        <br>
                                                                        <h2 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'>{{ $intervenant->motivation }}</h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <h2 style='font-weight: bold; color:blue; font-family: "Comic Sans MS"'>CRITÈRES DE CONTRAT</h2>
                                                            <br>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Types de contrats acceptés / possibles (si rémunération)</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $conts as $cont )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $cont->{'type_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Interventions à distance et déplacements</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $inters as $inter )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $inter->{'type_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Disponibilités dans l'année</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $dispos as $dispo )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $dispo->{'titre_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Durée d'intervention souhaitée</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $durs as $dur )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $dur->{'type_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Mes expériences dans l'enseignement et la formation</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $texps as $texp )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $texp->{'type_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Langues d'enseignement possibles</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $langs as $lang )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $lang->{'name_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Plages horaires souhaitées</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $hors as $hor )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $hor->{'titre_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Rémunération</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $remus as $remu )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $remu->{'type_'.$local} }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Domaine(s) général(aux) d'intervention</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $discips as $discip )
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $discip->name }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>Domaines de compétence</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $intervenant->competence }}</li></h3>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-md-12">
                                                                    <div class="form-group form-group-default bordre">
                                                                        <label>les types d'écoles dans lesquelles l'intervenant souhaite intervenir</label>
                                                                        <br>
                                                                        <ul class="list-group">
                                                                            @foreach ( $formas as $forma ) 
                                                                                <h3 style='color: #f6b60b; font-family: "Comic Sans MS", Times, serif;'><li class="list-group-item">{{ $forma->type }}</li></h3>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="card card-profile card-secondary">
                                                                <div class="card-header" style="background-image: url('admini/assets/img/blogpost.jpg')">
                                                                    <div class="profile-picture">
                                                                        <div class="avatar avatar-xxl">
                                                                            <img src="{{ asset('supconnexion/public/uploads/photo/profil/'.$intervenant->photo) }}" data-placeholder="{{ asset('supconnexion/public/uploads/photo/profil/Placeholder.png') }}" alt="" class="avatar-img rounded-circle">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="card-body" style="margin-top:10px">
                                                                    <div class="user-profile text-center">
                                                                    <br><br><br>
                                                                        <div class="social-media">
                                                                            <div class="row mt-3">
                                                                                <div class="col-md-5 form-group form-group-default">
                                                                                    <h5>Profil LinkeDin</h5>
                                                                                    <a class="btn btn-info btn-linkedin btn-sm btn-link" href="{{ $intervenant->linkdin }}"> 
                                                                                        <span class="btn-label just-icon"><i class="flaticon-linkedin"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-2"></div>
                                                                                <div class="col-md-5 form-group form-group-default">
                                                                                    <h5>Voir CV</h5>
                                                                                    <a class="btn btn-info btn-linkedin btn-sm btn-link" href="{{ asset('supconnexion/public/uploads/cv/'.$intervenant->cv) }}"> 
                                                                                        <span class="btn-label just-icon"><i class="flaticon-file"></i></span>
                                                                                    </a>
                                                                                </div>
                                                                                <div class="col-md-12" style="margin-top:20px">
                                                                                    <div class="view-profile">
                                                                                        <a href="#" class="btn btn-secondary btn-block">Télécharger Mon Profil</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
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
                                                    <div class="table-responsive">
                                                        <table id="basic-datatables" class="display table table-striped table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Diplome Num. </th>
                                                                    <th>Ecole</th>
                                                                    <th>Grade</th>
                                                                    <th>titre</th>
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
                                                    <div class="table-responsive">
                                                        <table id="add-row" class="display table table-striped table-hover" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Expérience num. </th>
                                                                    <th>Intitulé de l'intervention</th>
                                                                    <th>Etablissement ou entreprise</th>
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
                                                                        
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
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