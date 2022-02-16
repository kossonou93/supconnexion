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
            <h2>@lang('public.contactNous')</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('contacts.index')}}" class="active">@lang('public.contactezNous')</a></li>
            </ol>
        </section>
        <!-- End Banner area -->
        <!-- All contact Info -->
        <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p></p>
                    <p></p>
                    <div class="location">
                        <div class="location_laft">
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">contact@sup-connexion.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>@lang('public.envoiMessage')</h2>
                    <form action="{{ route('contacts.store') }}" method="post" enctype="multipart/form-data" class="form-inline contact_box">
                        @csrf
                        <input type="text" name="first_name" class="form-control input_box" placeholder="@lang('public.nom') *" required>
                        <input type="text" name="last_name" class="form-control input_box" placeholder="@lang('public.prenom') *">
                        <input type="email" name="email" class="form-control input_box" placeholder="Email *" required>
                        <input type="text" name="sujet" class="form-control input_box" placeholder="@lang('public.sujet')">
                        <input type="text" name="site" class="form-control input_box" placeholder="@lang('public.siteWeb')">
                        <textarea type="text" name="texte" class="form-control input_box" placeholder="Message *" required></textarea>
                        <button type="submit" class="btn btn-default">@lang('public.envoyez')</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
        <!-- End All contact Info -->


 @include('parts/footer')
