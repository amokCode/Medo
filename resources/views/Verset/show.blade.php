@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('content')

<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> Contenu du verset <strong>{{ $verset->nom }}</strong></h4>
            </div>
            <div class="card-body">
                {!! $verset->contenu !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> Note sur le verset <strong>{{ $verset->nom }}</strong></h4>
            </div>
            <div class="card-body">
                {!! $verset->note !!}
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="text-right">
        <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa fa-close"></i> Fermer</a>
        <a href="{{ route('verset.edit', $verset->id) }}" class="btn btn-primary btn-nav" title="Modifier"><i class="fa fa-pencil-square-o "></i> Modifier</a>
    </div>
</div>

@section('script')
<script>
    $('.btn-nav').click(function(e) {
        e.preventDefault();
        console.log('link:' + $(this).attr('href'))

        $('.contenu').load($(this).attr('href'))
    });
</script>
@endsection



@endsection

@section('script')
<script>
    $('.btn-nav').click(function(e) {
        e.preventDefault();
        console.log('link:' + $(this).attr('href'))

        $('.contenu').load($(this).attr('href'))
    });
</script>
@endsection

