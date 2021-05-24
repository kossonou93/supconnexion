<div class="page-header">
    <h4 class="page-title">Administrateur Dashboard</h4>
    <div class="btn-group btn-group-page-header ml-auto">
        <button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-h"></i>
        </button>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-12">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
    </div>
</div>