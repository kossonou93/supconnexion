<div class="modal fade" id="editRowModal{{$diplome->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">
                        Editer
                    </span> 
                    <span class="fw-light">
                        Diplome
                    </span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('diplomes.update',$diplome->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
				{{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label>Ecole</label>
                                <input type="text" value="{{$diplome->ecole}}" class="form-control" id="ecole" name="ecole" placeholder="Entrez le nom de l'école où vous avez obtenu votre diplome" required>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Grade</label>
                                <select class="form-control" name="grade" value="{{$diplome->grade}}">
                                    <option>{{$diplome->grade}}</option>
                                    <option>BAC</option>
                                    <option>BAC+1 </option>
                                    <option>BAC+2 </option>
                                    <option>BTS </option>
                                    <option>BAC+3 </option>
                                    <option>LICENCE </option>
                                    <option>BAC+4 </option>
                                    <option>BAC+5 </option>
                                    <option>MASTER </option>
                                    <option>BAC+6 </option>
                                    <option>BAC+7 </option>
                                    <option>DOCTORAT </option>
                                </select>
                            </div>
                            <div class="form-group form-group-default">
                                <label>Titre</label>
                                <input type="text" value="{{$diplome->titre}}" class="form-control" name="titre" placeholder="Entrez le titre votre diplome" required>
                            </div>
                            <div class="form-group form-group-default" style="display:none">
                                <label>Titre</label>
                                <input type="text" value="{{ Auth::user()->id }}" class="form-control" name="intervenant_id" value="{{ Auth::user()->id }}" placeholder="Entrez le titre votre diplome">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button class="btn btn-success">@lang('public.envoyez')</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('public.annulez')</button>
                </div>
            </form>
        </div>
    </div>
</div>