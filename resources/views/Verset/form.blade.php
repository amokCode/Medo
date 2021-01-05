<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> <i class="fa fa-align-left text-primary"></i> {{ $title }} </h4>
            </div>
            <div class="card-body">
                <form action="{{ ($title == 'Nouveau Verset') ? route('verset.store') : route('verset.update', $verset->id) }}" method="POST">
                    @csrf
                    
					<div class="row">                        <!-- Champ nom -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Verset du jour:</label>
                                <input class="form-control" type="search" placeholder="Exp: Prov 2.3-5" required name="nom" value="{{ $verset->nom ?? old('nom') }}" {{ ($show) ? 'disabled' : ''}}>
                                {{-- @error('')
                                    <span class="invalid-feedback">
                                        {{ $errors->first('') }}
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <!-- Champ date -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> Pour le:</label>
                                <input class="form-control" type="date" placeholder="Exp: Jeu 15 Dec 2021" required name="date" value="{{ $verset->date ?? old('date') }}" {{ ($show) ? 'disabled' : ''}}>
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
                                <textarea 
                                    rows=5 
                                    name="contenu"
                                    class="form-control">{{ $verset->contenu ?? old('contenu') }}
                                </textarea>
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
                                <textarea 
                                    rows=5 
                                    name="note"
                                    class="form-control">{{ $verset->note ?? old('note') }}
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
                        <a href="{{ route('verset.index') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
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
