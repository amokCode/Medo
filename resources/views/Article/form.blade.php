<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ ($title == 'Nouvel Article') ? route('article.store') : route('article.update', $article->id) }}" method="POST">
                    @csrf
                    
					<div class="row">
                        <!-- Champ nom -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Nom:</label>
                                <input class="form-control" type="search" required name="nom" value="{{ $article->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

					<div class="row">
                        <!-- Champ contenu -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label> Contenu:</label>
                                <textarea id="my-textarea" 
                                    class="form-control" 
                                    required 
                                    name="contenu" rows="5" 
                                    value="{{ $article->contenu ?? old('contenu') }}" {{ ($show) ? 'disabled' : ''}}>
                                </textarea>
                                {{-- <input class="form-control" type="text"  name="" > --}}
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>
					</div>

                    <div class="text-right">
                        <a href="{{ route('article.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
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
