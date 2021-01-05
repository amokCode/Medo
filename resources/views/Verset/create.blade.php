@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('content')
    @include('Verset.form', [$title='Nouveau Verset', $show=false])
@endsection

@section('script')
    <script>
        $('.btn-nav').click(function(e) {
            e.preventDefault();
            console.log('link:' + $(this).attr('href'))

            $('.contenu').load($(this).attr('href'))
        });
        CKEDITOR.replace( 'contenu' );
        CKEDITOR.replace( 'note' );
    </script>
@endsection
