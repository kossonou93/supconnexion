@include('parts/head')
<body>
    <!-- Preloader -->
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

	<!-- Top Header_Area -->
	@include('parts/menu')
    <!-- Banner area -->
        <section class="banner_area" data-stellar-background-ratio="0.5">
            <h2>@lang('public.projetSup')</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('leprojet')}}" class="active">@lang('public.projetSup')</a></li>
            </ol>
        </section>
        <!-- End Banner area -->
        <!-- All contact Info -->
        <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-12 contact_info">
                    <p class="text-justify" style="font-weight: bold; font-family: 'Comic Sans MS';"><span style="font-family: 'Comic Sans MS'; color: blue; font-size: 17px">@lang('public.projetPortailDedie') </span>
                    <span style="color: red; font-size: 20px">@lang('public.besoinEtOpportunite') </span>
                    <span style="color: blue; font-size: 17px">@lang('public.cePortail')  </span>
                    </p>
                    <p class="text-justify">
                        <ul class="text-justify" style="list-style-type: decimal;font-family: 'Comic Sans MS'; font-weight: bold; font-size: 17px">
                            <li>@lang('public.donnezVisibilite')</li>
                            <br>
                            <li>@lang('public.trouvezIntervenant')</li>
                            <br>
                            <li>@lang('public.donnezVisibiliteDomaine')</li>
                            <br>
                            <li>@lang('public.trouvezOpportunite')</li>
                            <br>
                            <li>@lang('public.donnezVisibiliteOpportunite')</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
