		<!-- Sidebar -->
		<div class="sidebar">
			
			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="admini/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<span class="user-level"></span>
									
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>
							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											{{ __('Se déconnecter') }}
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
						<li class="nav-item active">
							<a href="{{route('admin.dashboard')}}">
								<i class="fas fa-home"></i>
								<p>Home</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Composants</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#inter">
								<i class="fas fa-user"></i>
								<p>Intervenants</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="inter">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('admin.intervenant.all')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#ecole">
								<i class="fas fa-user"></i>
								<p>Ecoles</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="ecole">
								<ul class="nav nav-collapse">
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('admin.ecole.all')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#actualite">
								<i class="fas fa-book-open"></i>
								<p>Disciplines</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="actualite">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('actualites.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('actualites.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-book-open"></i>
								<p>Disciplines</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('disciplines.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('disciplines.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#formations">
								<i class="fas fa-graduation-cap"></i>
								<p>Formations</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="formations">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('formations.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('formations.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#langues">
								<i class="fa fa-language"></i>
								<p>Langues</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="langues">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('langues.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('langues.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#contrats">
								<i class="fas fa-file-contract"></i>
								<p>Contrat</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="contrats">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('contrats.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="maps/fullscreenmaps.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('contrats.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#disponibilites">
								<i class="fa fa-calendar-alt"></i>
								<p>Disponibilité</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="disponibilites">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('disponibilites.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="charts/sparkline.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('disponibilites.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#durees">
								<i class="fa fa-hourglass-half"></i>
								<p>Durées</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="durees">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('durees.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('durees.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#horaire">
								<i class="fas fa-clock"></i>
								<p>Horaires</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="horaire">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('horaires.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('horaires.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#modalites">
								<i class="fa fa-money-check-alt"></i>
								<p>Modalités de paye</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="modalites">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('modalites.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('modalites.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#forms">
								<i class="fas fa-chalkboard-teacher"></i>
								<p>Interventions</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="forms">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('interventions.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('interventions.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#remunerations">
								<i class="fas fa-hand-holding-usd"></i>
								<p>Rémunerations</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="remunerations">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('remunerations.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('remunerations.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#responsabilites">
								<i class="fas fa-user-tie"></i>
								<p>Responsabilites</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="responsabilites">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('responsabilites.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('responsabilites.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#typeexperiences">
								<i class="fa fa-award"></i>
								<p>Types d'Expériences</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="typeexperiences">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('typeexperiences.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="components/buttons.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="components/gridsystem.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="components/panels.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('typeexperiences.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#pays">
								<i class="fas fa-flag"></i>
								<p>Pays</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="pays">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('pays.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="maps/fullscreenmaps.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('pays.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#ville">
								<i class="fas fa-building"></i>
								<p>Ville</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="ville">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('villes.create')}}">
											<span class="sub-item">Ajouter</span>
										</a>
									</li>
									<li>
										<a href="maps/fullscreenmaps.html">
											<span class="sub-item">Modifier</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Supprimer</span>
										</a>
									</li>
									<li>
										<a href="maps/jqvmap.html">
											<span class="sub-item">Rechercher</span>
										</a>
									</li>
									<li>
										<a href="{{route('villes.index')}}">
											<span class="sub-item">Voir tous</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->