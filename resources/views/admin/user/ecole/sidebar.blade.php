<div class="sidebar">
			
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{ asset('uploads/photo/profil/'.Auth::user()->photo) }}" alt="" class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<span class="user-level">{{ Auth::user()->name }}</span>
							
							<span class="caret"></span>
						</span>
					</a>
					<div class="clearfix"></div>

					<div class="collapse in" id="collapseExample">
						<ul class="nav">
							<li>
								<div class="dropdown-divider">
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
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
					<a href="{{route('ecole.dashboard')}}">
						<i class="fas fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item active">
					<a href="{{route('ecole.dashboard')}}">
						<i class="flaticon-profile"></i>
						<p>Profil Ecole</p>
					</a>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#personnelles">
						<i class="flaticon-user-4"></i>
						<p>Intervenant</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="personnelles">
						<ul class="nav nav-collapse">
							<li>
								<a class="nav-link" href="{{route('search.intervenants')}}">
									<span class="sub-item">Intervenants</span>
								</a>
							</li>
							
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#annonce">
						<i class="flaticon-present"></i>
						<p>Nos Annonces</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="annonce">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('annonces.index')}}">
									<span class="sub-item">Voir nos Annonces</span>
								</a>
							</li>
							<li>
								<a href="{{route('annonces.create')}}">
									<span class="sub-item">Ajouter une annonce</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>