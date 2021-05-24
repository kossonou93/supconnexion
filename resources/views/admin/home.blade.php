@include('admin/part/head')
<body>
	<div class="loader_bg">
        <div class="loader"></div>
    </div>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		@include('admin/part/mainheader')
		@include('admin/part/sidebar')
		<div class="main-panel">
			<div class="content">
				<div class="page-navs bg-white">
					<div class="nav-scroller">
						<div class="nav nav-tabs nav-line nav-color-primary d-flex align-items-center justify-contents-center w-100">
							<a class="nav-link active show" data-toggle="tab" href="#tab1">Carousel
								<span class="count ml-1"></span>
							</a>
							<div class="ml-auto">
								<a href="{{route('carousels.create')}}" class="btn btn-success">Ajouter Image Carousel</a>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<h4 class="card-title">Carousel</h4>
								<div class="card-tools">
									<a href="{{route('carousels.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Ajouter</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="row row-projects">
								@foreach ($carousels as $carousel)
									<div class="col-sm-6 col-lg-3">
										<div class="card">
											<div class="p-2">
												<img class="card-img-top rounded" src="{{ asset('uploads/photo/carousel/'.$carousel->photo) }}" style="height:200px">
											</div>
											<div class="card-body pt-2">
												<h4 class="mb-1 fw-bold">{{ $carousel->titre }}</h4>
												<p class="text-muted small mb-2">{{ $carousel->created_at }}</p>
												<div class="row">
													<div class="col-1"></div>
													<div class="col-2">
														<a href="{{ route('carousels.show',$carousel->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
													</div>
													<div class="col-6"></div>
													<div class="col-2">
														<form id="delete_form_{{ $carousel->id }}" method="post" action="{{ route('carousels.destroy', $carousel->id) }}">
															@csrf
															@method('DELETE')
															<button title="Delete" type="submit" class="btn btn-danger">
																<i onclick="deleteItem({{ $carousel->id }})" class="fa fa-trash"></i>
															</button>
														</form>
													</div>
													<div class="col-1"></div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-head-row">
									<h4 class="card-title">Partenaires</h4>
									<div class="card-tools">
										<a href="{{route('partenaires.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i>Ajouter</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="card-list">
								@foreach ($partenaires as $partenaire)
									<div class="item-list">
										<div class="p-2">
											<img src="{{ asset('uploads/photo/partenaire/'.$partenaire->photo) }}" alt="" style="width:100px" class="card-img-top rounded">
										</div>
										<div class="info-user ml-3">
											<div class="username">{{ $partenaire->titre }}</div>
											<div class="status">{{ $partenaire->created_at }}</div>
										</div>
										<button class="btn btn-icon btn-primary btn-round btn-sm">
											<i class="fa fa-edit"></i>
										</button>
										&emsp;&emsp;&emsp;&emsp;
										<button class="btn btn-icon btn-danger btn-round btn-sm">
											<i class="fa fa-trash"></i>
										</button>
									</div>
								@endforeach
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