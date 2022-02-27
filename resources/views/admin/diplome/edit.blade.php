@include('admin/part/head')
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		@include('admin/part/mainheader')

				<!-- Sidebar -->
		@include('admin/part/sidebar')
		<!-- End Sidebar -->
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				<h4 class="page-title">Editer le diplome</h4>
					<div class="row">
						<div class="col-md-8">
                        <form action="{{ route('diplomes.update',$diplome->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
							<div class="card card-with-nav">
								<div class="card-body">
								<br><br>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Ecole</label>
												<input type="text" class="form-control" name="ecole" value="{{ $diplome->ecole }}" placeholder="Entrez le nom de l'école où vous avez obtenu votre diplome" required>
											</div>
										</div>
                                    </div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Titre</label>
												<input type="text" class="form-control" name="titre" value="{{ $diplome->titre }}" placeholder="Entrez le titre de votre diplome" required>
											</div>
										</div>
                                    </div>
									<div class="row mt-3" style="display:none">
										<div class="col-md-12">
											<div class="form-group form-group-default">
												<label>Intervenant</label>
												<input type="text" class="form-control" name="intervenant_id" value="{{ $diplome->intervenant_id }}" placeholder="">
											</div>
										</div>
                                    </div>
									<div class="text-center mt-3 mb-3">
										<button class="btn btn-success">@lang('public.validez')</button>
										<button class="btn btn-danger">@lang('public.annulez')</button>
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
												<img src="{{ asset('uploads/photo/profil/'.Auth::user()->photo) }}" alt="" class="avatar-img rounded-circle">
											</div>
										</div>
									</div>
									<div class="card-body" style="margin-top:10px">
										<div class="user-profile text-center">
											<div class="name">{{ Auth::user()->name }}</div>
											<div class="job">{{ Auth::user()->fonction }}</div>
											<div class="desc">{{ Auth::user()->about }}</div>
											<div class="social-media">
												<a class="btn btn-info btn-twitter btn-sm btn-link" href="#"> 
													<span class="btn-label just-icon"><i class="flaticon-twitter"></i> </span>
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
												<a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row user-stats text-center">
											<div class="col">
												<div class="number">125</div>
												<div class="title">Post</div>
											</div>
											<div class="col">
												<div class="number">25K</div>
												<div class="title">Followers</div>
											</div>
											<div class="col">
												<div class="number">134</div>
												<div class="title">Following</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					
				</div>
			</div>
			
		</div>
		
		<div class="custom-template">
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
		</div>
		<!-- End Custom template -->
	</div>
</div>



<!--   Core JS Files   -->
@include('admin/part/footer')