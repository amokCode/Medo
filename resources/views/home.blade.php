@extends('layouts.app')

@section('content')
    {{-- <div class="row">
        <div class="col-md-12">
            <div class="card bg-warning-light">
                <div class="card-body">
                    <i style="color: #ff4e0a" class="fa fa-info-circle fa-3x float-left pr-3"></i>
                    <h4><strong class="text-dark">La solution pour retracer toutes vos missions</strong></h4>
                    <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat non quia rem pariatur fuga odio suscipit vitae soluta consectetur ab delectus tempore quam, dolorum, aspernatur quasi! Similique a deserunt quo.</p>
                </div>
            </div>
        </div>
    </div> --}}
    
    <h3 class="pb-3"><strong class="text-dark"><i style="color: #ff4e0a" class="fa fa-hashtag "></i> Section <span class="text-warning">Article</span></strong></h3>
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
    <h3 class="pb-3"><strong class="text-dark"><i style="color: #ff4e0a" class="fa fa-hashtag "></i> Section <span class="text-warning">Plan de Lecture</span></strong></h3>
    <div class="row">
        <div class="col-md-6">
            <a href="#">
                <div class="card box">
                    <div class="card-body">
                        <div class="row m-3">
                            {{-- <div class="col-md-12 text-center">
                                <h1><i style="color: #ff4e0a" class="fa fa-file-text-o fa-2x mb-3"></i></h1>
                            </div>
                            <div class="col-md-12 text-center"> --}}
                                <h4 class="col-md-12">Verset 1: Gn 4.2-6.3 <a href="#" class="btn btn-sm bg-success-light text-success pull-right"><i class="fa fa-address-book"></i> Ouvrir</a></h4>
                                <h4 class="col-md-12">Verset 2: Gn 4.2-6.3 <a href="#" class="btn btn-sm bg-success-light text-success pull-right"><i class="fa fa-address-book"></i> Ouvrir</a></h4>
                                <h4 class="col-md-12">Verset 3: Gn 4.2-6.3 <a href="#" class="btn btn-sm bg-success-light text-success pull-right"><i class="fa fa-address-book"></i> Ouvrir</a></h4>
                                <h4 class="col-md-12">Verset 4: Gn 4.2-6.3 <a href="#" class="btn btn-sm bg-success-light text-success pull-right"><i class="fa fa-address-book"></i> Ouvrir</a></h4>
                                {{-- <strong>Nouvel Article</strong><br>
                                {{-- <span>Vous verrez ici le formulaire de création d'un article</span> --}}
                            {{-- </div> --}}
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
@endsection
