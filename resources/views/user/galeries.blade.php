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
            <h2>Galeries</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('condition.generale')}}" class="active">Galeries</a></li>
            </ol>
        </section>
        <!-- End Banner area -->
        <div class="row">
            <div class="card mt-3 col-lg-3 col-md-4 col-sm-6 offset-sm-0 offset-1 col-10" style="width: 18rem;">
                <img class="card-img-top mt-3" src="assets/m1.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Pierre Leclercq</h5>
                    <p class="card-text"><small class="text-muted">Arrivé le 07/02/2011</small></p>
                </div>
            </div>

            <div class="card mt-3 col-lg-3 col-md-4 col-sm-6 offset-sm-0 offset-1 col-10" style="width: 18rem;">
                <img class="card-img-top mt-3" src="users/images/logo.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Justine Fabvre</h5>
                    <p class="card-text"><small class="text-muted">Arrivé le 11/06/2012</small></p>
                </div>
            </div>

            <div class="card mt-3 col-lg-3 col-md-4 col-sm-6 offset-sm-0 offset-1 col-10" style="width: 18rem;">
                <img class="card-img-top mt-3" src="users/images/logo.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Marine Lavoie</h5>
                    <p class="card-text"><small class="text-muted">Arrivé le 05/12/2016</small></p>
                </div>
            </div>

            <div class="card mt-3 col-lg-3 col-md-4 col-sm-6 offset-sm-0 offset-1 col-10" style="width: 18rem;">
                <img class="card-img-top mt-3" src="users/images/logo.png" class="card-img-top">
                <div class="card-body text-center">
                    <h5 class="card-title">Fanny Chapin</h5>
                    <p class="card-text"><small class="text-muted">Arrivé le 02/05/2017</small></p>
                </div>
            </div>

        </div>
        <!-- All contact Info -->
        <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-12 contact_info">
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
