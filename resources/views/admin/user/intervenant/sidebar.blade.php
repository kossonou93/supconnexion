<div class="sidebar">
			
	<div class="sidebar-background"></div>
	<div class="sidebar-wrapper scrollbar-inner">
		<div class="sidebar-content">
			<div class="user">
				<div class="avatar-sm float-left mr-2">
					<img @if (Auth::user()->photo == NULL)
						src="{{ asset('supconnexion/public/uploads/photo/profil/Placeholder.png') }}"
					@else
						src="{{ asset('supconnexion/public/uploads/photo/profil/'.Auth::user()->photo) }}"
					@endif
					alt="" class="avatar-img rounded-circle">
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
						<p>@lang('public.profil') @lang('public.intervenant')</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{route('offres.index')}}">
						<i class="flaticon-present"></i>
						<p>@lang('public.mesOffres')</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="dropdown-item" href="{{ route('inter.logout') }}"
						onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
						<i class="flaticon-power"></i>
						<p>@lang('public.seDeconnecter')</p>
					</a>
					<form id="logout-form" action="{{ route('inter.logout') }}" method="POST" class="d-none">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</div>
	</div>
</div>