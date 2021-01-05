<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header bg-primary">
                <h4 class="card-title text-center text-light"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ ($title == 'Nouvel Categorie') ? route('categorie.store') : route('categorie.update', $categorie->id) }}" method="POST">
                    @csrf
                    
					<div class="row">
                        <!-- Champ nom -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nom:</label>
                                <input class="form-control text-capitalize" type="search" required name="nom" value="{{ $categorie->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

					<div class="row">
                        <!-- Champ description -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Description:</label>
                                <textarea 
                                    class="form-control" 
                                    name="description" 
                                    rows="3"{{ ($show) ? 'disabled' : ''}}>
                                    {{ $categorie->description ?? old('description') }}
                                </textarea>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

                    <div class="text-right">
                        <a href="{{ route('categorie.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
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
