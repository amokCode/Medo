<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ ($title == 'Nouvel Invite') ? route('invite.store') : route('invite.update', $invite->id) }}" method="POST">
                    @csrf
                    
					<div class="row">                        <!-- Champ nom -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Nom:</label>
                                <input class="form-control" type="search" Placeholder="ATOSSOU Paul" required name="nom" value="{{ $invite->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ telephone -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Telephone:</label>
                                <input class="form-control" type="text" Placeholder="+229 61 61 61 61" required name="telephone" value="{{ $invite->telephone ?? old('telephone') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

					<div class="row">                        <!-- Champ date_invitation -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Date d'Invitation:</label>
                                <input class="form-control" type="date" required name="date_invitation" value="{{ $invite->date_invitation ?? old('date_invitation') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ statut -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Statut:</label>
                                <select class="form-control" name="statut">
                                    <option value="En attente">En attente</option>
                                    <option value="En cours">En cours</option>
                                    <option value="Terminé">Terminé</option>
                                </select>
                                {{-- <input value="{{ $invite->statut ?? old('statut') }}" {{ ($show) ? 'disabled' : ''}}> --}}
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

					<div class="row">
                        <!-- Champ note -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Note:</label>
                                <textarea rows=5 class="form-control" {{ ($show) ? 'disabled' : ''}}>{{ $invite->note ?? old('note') }}</textarea>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

                    <div class="text-right">
                        <a href="{{ route('invite.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
                        @if(!$show)
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-floppy-o"></i> Enregistrer
                            </button>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
