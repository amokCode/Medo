@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('content')
    @include('Article.form', [$title='Nouvel Article', $show=false])
@endsection

@section('script')
    {{-- <script src="{{ asset('assets/js/ckeditor.js') }}"></script> --}}
    <script>
        $('.btn-nav').click(function(e) {
            e.preventDefault();
            console.log('link:' + $(this).attr('href'))

            $('.contenu').load($(this).attr('href'))
        });
        CKEDITOR.replace( 'contenu' );
    </script>
@endsection
