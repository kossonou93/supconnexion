
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="editModalExperience{{$experience->id}}" role="dialog" aria-labelledby="myLargeModalLabel{{$experience->id}}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">Editer</span> 
                    <span class="fw-light">Expérience</span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('experiences.update',$experience->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
				{{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Intitulé de l'intervention</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="text" value="{{$experience->intitule}}" name="intitule" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Etablissement ou entreprise</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="text" value="{{$experience->etablissement}}" name="etablissement" class="form-control" placeholder="" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Date de début d'intervention</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="date" value="{{$experience->debut}}" name="debut" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Date de fin d'intervention / en cours</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="date" value="{{$experience->fin}}" name="fin" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Courte description</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <textarea class="form-control" value="{{$experience->description}}" name="description" rows="3">{{$experience->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Type d'intervention</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <select id='testSelectb' class="form-control" name="interventions[]" >
                                    @foreach ( $interventions as $intervention )
                                        <option value='{{ $intervention->id }}'
                                            @foreach ( $intervens as $interven )
                                                @if ($intervention->id == $interven->id)
                                                    selected
                                                @endif
                                            @endforeach
                                            >{{ $intervention->{'type_'.$local} }}
                                        </option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Nombre d'heures d'intervention</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="number" name="heure_intervention" value="{{$experience->heure_intervention}}" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Modalités</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <select class="form-control" name="modalites[]" >
                                @foreach ( $modalites as $modalite )
                                    <option
                                    @foreach ( $modals as $modal )
                                        @if ($modalite->id == $modal->id)
                                            selected
                                        @endif
                                    >{{ $modalite->type }}</option>
                                @endforeach 
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Niveau des étudiants ou des professionnels</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="text" name="niveau_participant" class="form-control" value="{{$experience->niveau_participant}}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Niveau de responsabilité</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <select class="form-control" name="responsabilites[]" >
                                @foreach ( $responsabilites as $responsabilite )
                                    <option
                                        @if ($responsabilite->experience_id == $experience->id)
                                            selected
                                        @endif
                                    >{{ $responsabilite->type }}</option>
                                @endforeach 
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Nombre de participants à votre intervention</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="number" name="nombre_participant" class="form-control" value="{{$experience->nombre_participant}}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">J'ai créé les supports de l'intervention</label>
                        <div class="col-sm-2">
                            <div class="md-form mt-0">
                                <select class="form-control" name="support_intervention">
                                    <option>{{$experience->support_intervention}}</option>
                                    <option>NON</option>
                                    <option>OUI</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="md-form mt-0">
                            </div>
                        </div>
                    </div>				
                    <div class="row mt-3">
                        <label class="col-sm-4 col-form-label">Autres expériences notables</label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <textarea class="form-control" name="autre" rows="3">{{$experience->nombre_participant}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3" style="display:none">
                        <label class="col-sm-4 col-form-label"></label>
                        <div class="col-sm-8">
                            <div class="md-form mt-0">
                                <input type="text" name="intervenant_id" value="{{ Auth::user()->id }}" class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd">
                    <button class="btn btn-primary">@lang('public.envoyez')</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('public.annulez')</button>
                </div>
            </form>
        </div>
    </div>
</div>
            