<div class="sidebar">
			
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img @if (Auth::user()->logo == NULL)
						src="{{ asset('supconnexion/public/uploads/photo/profil/Placeholder.png') }}"
					@else
						src="{{ asset('supconnexion/public/uploads/photo/logo/'.Auth::user()->logo) }}"
					@endif
					alt="" class="avatar-img rounded-circle">
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
						<p>@lang('public.profilEcole')</p>
					</a>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#personnelles">
						<i class="flaticon-user-4"></i>
						<p>@lang('public.intervenant')</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="personnelles">
						<ul class="nav nav-collapse">
							<li>
								<a class="nav-link" href="{{route('search.intervenants')}}">
									<span class="sub-item">@lang('public.recherche') @lang('public.intervenant')</span>
								</a>
							</li>
							
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a data-toggle="collapse" href="#annonce">
						<i class="flaticon-present"></i>
						<p>@lang('public.mesAnnonce')</p>
						<span class="caret"></span>
					</a>
					<div class="collapse" id="annonce">
						<ul class="nav nav-collapse">
							<li>
								<a href="{{route('annonces.index')}}">
									<span class="sub-item">@lang('public.voirMesAnnonce')</span>
								</a>
							</li>
							<li>
								<a href="{{route('choix.annonces')}}">
									<span class="sub-item">@lang('public.ajoutAnnonce')</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="dropdown-item" href="{{ route('eco.logout') }}"
						onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
						<i class="flaticon-power"></i>
						<p>@lang('public.seDeconnecter')</p>
					</a>
					<form id="logout-form" action="{{ route('eco.logout') }}" method="POST" class="d-none">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</div>
	</div>
</div>