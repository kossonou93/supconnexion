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
														@lang('public.intervenants')
													</a>
												</li>
											</ul>
										</div>
									</div>

									<div class="tab-content">
										<div class="tab-pane fade active show" role="tabpanel" aria-labelledby="home-tab">
											<div class="card bordr-card">	
												<div class="card-body">
													<br>
													<table id="add-row" class="display table table-striped table-hover" >
														<thead>
															<tr>
																<th>@lang('public.offre') num. </th>
																<th>@lang('public.nom')</th>
																<th>@lang('public.fonction')</th>
																<th>@lang('public.voirCV')</th>
																<th>@lang('public.enSavoirPlus')</th>
															</tr>
														</thead>
														<tbody>
															<?php
																$i=1;
															?>
															@foreach ( $intervenants as $intervenant )
																<tr>
																	<td>
																		<?php
																			echo $i;
																			++$i;
																		?>
																	</td>		
																	<td>
																		{{$intervenant->name}}
																	</td>
																	<td>
																		{{$intervenant->fonction}}
																	</td>
																	<td>
																		<a class="btn btn" href="{{ asset('supconnexion/public/uploads/cv/'.$intervenant->cv) }}" role="button" target="_blank"><i class="flaticon-file"></i></a>
																	</td>
																	<td>
																		<a class="btn btn" href="{{ route('details.intervenant',$intervenant->id)}}" role="button" target="_blank">@lang('public.enSavoirPlus')</a>
																	</td>
																</tr>
															@endforeach
														</tbody>
													</table>
													<div class="row mt-3">
														<div class="col-md-12">
															<div class="text-white text-center rgba-stylish-strong py-1 px-4">
																<ul class="specification-list">
																	<li>
																		<h3 class="name-specification" style="color:red; font-family: 'Comic Sans MS'">@lang('public.retrouverTousInter') <a href="{{route('choix.paiements')}}" class="btn btn-danger btn-rounded">@lang('public.cliquez') </a></h3>
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
	</div>
	
<!--   Core JS Files   -->
@include('admin/part/footer')