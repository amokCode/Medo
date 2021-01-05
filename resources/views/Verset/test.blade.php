@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('content')
<div class="row">
    <div class="col-xl-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <h4 class="card-title"> Note du Verset {{ $verset->nom }}</h4>
            </div>
            <div class="card-body">
                {{ $verset->note }}
            </div>
        </div>
    </div>
</div>

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

