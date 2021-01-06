@extends('layouts.app')

@section('css')
    <style>
        .card-body-size {
            min-height: 300px;
            min-width: 300px;
            margin-right: 5px;
        }

    </style>
@endsection
@section('content')
    @php
        $colors = ["#0a55ff", "#ff4e0a", "#1bd43b", "#ff0000"];
        $i = 0;

        $categories = App\Categorie::all();

        $today = Carbon\Carbon::now()->toDateString();

        $versets = App\Verset::where('date', $today)->get();
    @endphp

    <h3 class="pb-3">
        <strong class="text-dark">
            <i style="color: #ff4e0a" class="fa fa-hashtag"></i> Section <span class="text-warning">Catégories</span>
        </strong>
    </h3>
    <div class="d-flex flex-row flex-nowrap overflow-auto mb-4">
        @foreach ($categories as $categorie)
            <a href="{{ route('categorie.show', $categorie->id) }}" class="mr-2">
                <div class="card box">
                    <div class="card-body-size">
                        <div class="rosw m-4">
                            <h4>{{ $categorie->nom }}</h4>
                            <p class="card-tedxt">{{ $categorie->description }}.
                            </p>
                            <span class="btn btn-primary"><i class="fa fa-folder-open"></i> Consulter</span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach

        {{-- @endfor --}}
    </div>

    <h3 class="pb-3"><strong class="text-dark"><i style="color: #ff4e0a" class="fa fa-hashtag "></i> Section <span
                class="text-warning">Articles</span></strong></h3>
    <div class="row">
        <div class="col-md-6">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-md-12 text-center">
                                <h1><i style="color: #ff4e0a" class="fa fa-file-text-o fa-2x mb-3"></i></h1>
                            </div>
                            <div class="col-md-12 text-center">
                                <strong>Nouvel Article</strong><br>
                                <span>Vous verrez ici le formulaire de création d'un article</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-md-12 text-center">
                                <h1><i style="color: #ff4e0a" class="fa fa-file-text fa-2x mb-3"></i></h1>
                            </div>
                            <div class="col-md-12 text-center">
                                <strong>Liste des Articles</strong><br>
                                <span>Vous verrez ici la liste de tous vos articles enrégistrées</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Section Plan de Lecture --}}
    <h3 class="pb-3"><strong class="text-dark"><i style="color: #ff4e0a" class="fa fa-hashtag "></i> Section <span
                class="text-warning">Plan de Lecture</span></strong></h3>
    <div class="row">
        {{-- <div class="col-md-6">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            <h4 class="col-md-12"><span class="text-dark">Verset 1: Gn 4.2-6.3 </span><a href="#"
                                    class="btn btn-sm bg-success-light text-success pull-right"><i
                                        class="fa fa-address-book"></i> Ouvrir</a></h4>
                            <h4 class="col-md-12">Verset 2: Gn 4.2-6.3 <a href="#"
                                    class="btn btn-sm bg-success-light text-success pull-right"><i
                                        class="fa fa-address-book"></i> Ouvrir</a></h4>
                            <h4 class="col-md-12">Verset 3: Gn 4.2-6.3 <a href="#"
                                    class="btn btn-sm bg-success-light text-success pull-right"><i
                                        class="fa fa-address-book"></i> Ouvrir</a></h4>
                            <h4 class="col-md-12">Verset 4: Gn 4.2-6.3 <a href="#"
                                    class="btn btn-sm bg-success-light text-success pull-right"><i
                                        class="fa fa-address-book"></i> Ouvrir</a></h4>
                        </div>
                    </div>
            </a>
        </div> --}}

        @foreach ($versets as $verset)
            <div class="col-md-3">
                <a href="{{ route('verset.show', $verset->id) }}" class="item-nav">
                    <div class="card box">
                        <div class="card-body">
                            <div class="row m-3">
                                <div class="col-md-12 text-center">
                                    <h1><i style="color: {{ $colors[$i] }}" class="fa fa-align-left fa-2x mb-3"></i></h1>
                                </div>
                                <div class="col-md-12 text-center">
                                    <strong>Verset {{ ++$i }}</strong><br>
                                    <span>{{ $verset->nom }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            {{-- @php $i++; @endphp --}}
        @endforeach

        {{-- <div class="col-md-3">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-md-12 text-center">
                                <h1><i style="color: #ff4e0a" class="fa fa-align-left fa-2x mb-3"></i></h1>
                            </div>
                            <div class="col-md-12 text-center">
                                <strong>Liste des Articles</strong><br>
                                <span>Vous verrez ici la liste de tous vos articles enrégistrées</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-md-12 text-center">
                                <h1><i style="color: #1bd43b" class="fa fa-align-left fa-2x mb-3"></i></h1>
                            </div>
                            <div class="col-md-12 text-center">
                                <strong>Liste des Articles</strong><br>
                                <span>Vous verrez ici la liste de tous vos articles enrégistrées</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            <div class="col-md-12 text-center">
                                <h1><i style="color: #ff0000" class="fa fa-align-left fa-2x mb-3"></i></h1>
                            </div>
                            <div class="col-md-12 text-center">
                                <strong>Liste des Articles</strong><br>
                                <span>Vous verrez ici la liste de tous vos articles enrégistrées</span>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>
@endsection
