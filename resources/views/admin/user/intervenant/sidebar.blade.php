<div class="sidebar">
			
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img src="{{ asset('uploads/photo/profil/'.Auth::user()->photo) }}" alt="" data-placeholder="{{ asset('uploads/photo/profil/Placeholder.png') }}" class="avatar-img rounded-circle">
				</div>
				<div class="info">
					<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
						<span>
							<span class="user-level">{{ Auth::user()->name }}</span>
						</span>
					</a>
				</div>
			</div>
			<ul class="nav">
				<li class="nav-item active">
					<a href="{{route('intervenant.dashboard')}}">
						<i class="fas fa-home"></i>
						<p>Home</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('intervenant.dashboard')}}">
						<i class="flaticon-profile"></i>
						<p>Profil Intervenant</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('offres.index')}}">
						<i class="flaticon-present"></i>
						<p>Mes offres</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('intervenant-logout') }}"
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