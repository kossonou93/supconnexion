<div class="row">
    <div class="col-sm-12 col-md-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
    </div>
</div>