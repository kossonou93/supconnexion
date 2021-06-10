<div class="sidebar">
			
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{ asset('uploads/photo/logo/'.Auth::user()->logo) }}" data-placeholder="{{ asset('uploads/photo/profil/Placeholder.png') }}" alt="" class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<span class="user-level">{{ Auth::user()->name }}</span>
							
							
						</span>
					</a>
					<div class="clearfix"></div>
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
						<p>Mes Annonces</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="annonce">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('annonces.index')}}">
									<span class="sub-item">Voir mes Annonces</span>
								</a>
							</li>
							<li>
								<a href="{{route('choix.annonces')}}">
									<span class="sub-item">Ajouter une annonce</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<form id="logout-form" action="{{ route('ecole-logout') }}" method="POST" class="d-none">
						@csrf
					</form>
					<a class="dropdown-item" href="#"
						onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
						<i class="flaticon-power"></i>
						<p>Se déconnecter</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>