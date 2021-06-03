<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
    </style>
</head>

<body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
    <!-- HIDDEN PREHEADER TEXT -->
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"></div>
    <div class="card-body">
												<br>
												<div class="row">
													<div class="col-md-8">
														<h4>Je renseigne mes informations personnelles</h4>
														<br><br>
														<form action="{{ route('intervenant.update.submit', ['post' => Auth::user()->id]) }}" method="post" enctype="multipart/form-data">
															{{ csrf_field() }}
															{{ method_field('PUT') }}
															<div class="row mt-3">
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Nom</label>
																		<input type="text" class="form-control" name="name" placeholder="Nom" value="{{ Auth::user()->name }}">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Prénom</label>
																		<input type="text" class="form-control" name="last_name" placeholder="Prénom" value="{{ Auth::user()->last_name }}">
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Email</label>
																		<input type="email" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}" disabled="disabled" >
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Date de Naissance</label>
																		<input type="Date" class="form-control" name="birth_day" value="{{ Auth::user()->birth_day }}" placeholder="1980-01-01">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Sexe</label>
																		<select class="form-control" value="{{ Auth::user()->sexe }}" name="sexe">
																			<option>Masculin</option>
																			<option>Feminin</option>
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Téléphone 1</label>
																		<input type="number" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Phone" required>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Téléphone 2</label>
																		<input type="number" class="form-control" value="{{ Auth::user()->contact }}" name="contact" placeholder="Phone">
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<div class="col-md-6">
																	<div class="form-group form-group-default">
																		<label>Pays</label>
																		<select name="pays_id" class="form-control" value="{{ Auth::user()->pays_id }}">
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
																	<div class="form-group form-group-default">
																		<label>Ville de résidence</label>
																		<select name="ville_id" class="form-control" value="{{ Auth::user()->ville_id }}">
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
																		<div class="form-group form-group-default">
																			<label>Insérez le lien vers votre profil LinkedIn</label>
																			<input type="text" class="form-control" value="{{ Auth::user()->linkdin }}" name="linkdin" placeholder="Linkdin">
																		</div>
																	</div>
																
																	<div class="col-md-6">
																		<div class="form-group form-group-default">
																			<label>Ajoutez votre Curriculum Vitae, à jour</label>
																			<input type="file" name="cv" class="form-control-file" value="{{ Auth::user()->cv }}">
																		</div>
																	</div>
																</div>
																<div class="row mt-3">
																	<div class="col-md-6">
																		<div class="form-group form-group-default">
																			<a class="btn btn-primary" href="{{Auth::user()->linkdin}}" role="button">Visiter mon linkedin</a>
																		</div>
																	</div>
																
																	<div class="col-md-6">
																		<div class="form-group form-group-default">
																			<a class="btn btn-primary" href="{{ route('downloadfile', 'uploads/cv/'.Auth::user()->cv) }}" role="button">Télécharger mon cv </a>
																		</div>
																	</div>
																</div>
															<div class="row mt-3">
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label for="exampleFormControlFile1">Photo de Profil</label>
																		<br>
																		<input type="file" name="photo" class="form-control-file" placeholder="{{ Auth::user()->photo }}" value="{{ Auth::user()->photo }}">
																	</div>
																</div>
															</div>
															<div class="row mt-3 mb-1">
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Intitulé de votre poste actuel et votre entreprise (ex : Directeur financier chez Entreprise X)</label>
																			<br>
																		<input class="form-control" type="text" name="fonction" value="{{ Auth::user()->fonction }}">
																	</div>
																</div>
															</div>
															<div class="row mt-3 mb-1">
																<div class="col-md-12">
																	<div class="form-group form-group-default">
																		<label>Présentation brève de votre parcours et motivations</label>
																			<br>
																			<textarea class="form-control" name="motivation" placeholder="" rows="3" value="{{ Auth::user()->motivation }}">{{ Auth::user()->motivation }}</textarea>
																	</div>
																</div>
															</div>
															
															<br>
															<h2 style='font-weight: bold; color:blue; font-family: "Comic Sans MS"'>VOS CRITÈRES</h2>
															
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Types de contrats acceptés / possibles (si rémunération)</label>
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
																			>{{ $contrat->type }}</option>
																		@endforeach
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Interventions à distance et déplacements</label>
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
																				>{{ $intervention->type }}
																			</option>
																		@endforeach 
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Disponibilités dans l'année</label>
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
																			>{{ $disponibilite->titre }}</option>
																		@endforeach 
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Durée d'intervention souhaitée</label>
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
																			>{{ $duree->type }}</option>
																		@endforeach
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Mes expériences dans l'enseignement et la formation</label>
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
																			>{{ $texperience->type }}</option>
																		@endforeach 
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Langues d'enseignement possibles</label>
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
																			>{{ $langue->name }}</option>
																		@endforeach
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Plages horaires souhaitées</label>
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
																			>{{ $horaire->titre }}</option>
																		@endforeach 
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Rémunération</label>
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
																				>{{ $remuneration->type }}</option>
																			@endforeach 
																		</select>
																	</div>
																</div>
															</div>
															<div class="row mt-3">
																<label class="col-sm-7 col-form-label">Domaine(s) général(aux) d'intervention</label>
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
																	<div class="form-group form-group-default">
																		<label>PRÉCISEZ VOS DOMAINES DE COMPÉTENCE*</label>
																		<br>
																		<textarea class="form-control" name="competence" placeholder="Séparez les par des virgules (ex: Mathématique, Anglais)" rows="3" value="{{ Auth::user()->competence }}">{{ Auth::user()->competence }}</textarea>
																	</div>
																</div>
															</div>
															<br>
															<div class="row mt-3">
																<div class="col-sm-12">
																	<div class="card card-image" style="background-color: white">
																		<div class="text-white text-center rgba-stylish-strong py-1 px-4">
																			<div class="py-5">
																				<h5 class="h5 orange-text">
																					<button class="btn btn-success">Valider</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																					<button class="btn btn-danger">Annuler</button>
																				</h5>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</form>
													</div>
													<div class="col-md-4">
														<div class="card card-profile card-secondary">
															<div class="card-header" style="background-image: url('admini/assets/img/blogpost.jpg')">
																<div class="profile-picture">
																	<div class="avatar avatar-xxl">
																		<img src="{{ asset('uploads/photo/profil/'.Auth::user()->photo) }}" data-placeholder="{{ asset('uploads/photo/profil/Placeholder.png') }}" alt="" class="avatar-img rounded-circle">
																	</div>
																</div>
															</div>
															<div class="card-body" style="margin-top:30px">
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
																		<a href="{{route('pdf')}}" class="btn btn-secondary btn-block">Télécharger Mon Profil</a>
																	</div>
																</div>
															</div>
															<div class="card-footer">
															</div>
														</div>
													</div>
												</div>
											</div>
</body>

</html>