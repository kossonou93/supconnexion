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
													<a style="font-size: 20px; font-weight: 900; color: #371F57;" class="nav-link" data-toggle="tab" id="home-tab" href="#home" role="tab" aria-selected="true">
														@lang('public.mesAnnonce')
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card-body bordr-card">
											<br>
											<h4></h4>
												<br><br>
												<table id="add-row" class="display table table-striped table-hover" >
													<thead>
														<tr>
															<th>@lang('public.offre') num. </th>
															<th>@lang('public.intitule')</th>
															<th>Description</th>
															<th>@lang('public.dateLimite')</th>
															<th>@lang('public.editer')</th>
															<th>@lang('public.supprimer')</th>
														</tr>
													</thead>
													<tbody>
														<?php
															$i=1;
														?>
														@foreach ( $annonces as $annonce )
															@if ($annonce->ecole_id == Auth::user()->id)
															<tr>
																<td>
																	<?php
																		echo $i;
																		++$i;
																	?>
																</td>		
																<td>
																	{{ $annonce->{'intitule_'.$local} }}
																</td>
																<td>
																	{{ $annonce->{'description_'.$local} }}
																</td>
																<td>
																	{{$annonce->date_limite}}
																</td>
																<td>
																	<div class="form-button-action">
																		<a href="{{ route('annonces.show',$annonce->id)}}" class="btn btn-primary btn-sm" data-original-title="Editer">
																			@lang('public.editer')
																		</a>
																	</div>
																</td>
																<td>
																	<div class="form-button-action">
																		<form action="{{ route('annonces.destroy', $annonce->id)}}" method="post" style="display: inline-block">
																			@csrf
																			@method('DELETE')
																			<button class="btn btn-danger btn-sm" type="submit">@lang('public.supprimer')</button>
																		</form>
																	</div>
																</td>
															</tr>
															@endif
														@endforeach
													</tbody>
												</table>
												<div class="row mt-3">
													<div class="col-md-12">
														<div class="text-white text-center rgba-stylish-strong py-1 px-4">
															<ul class="specification-list">
																<li>
																	<h3 class="name-specification" style="color:red; font-family: 'Comic Sans MS'">@lang('public.pourAjouterAnnonce') <a href="{{route('choix.annonces')}}" class="btn btn-danger btn-rounded">@lang('public.cliquez') </a></h3>
																</li>
															</ul> 
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
	</div>
	
<!--   Core JS Files   -->
@include('admin/part/footer')