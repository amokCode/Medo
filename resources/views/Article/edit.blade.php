@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('content')

@include('Article.form', [$title='Modifier Article', $show=false])

@endsection

@section('script')
{{-- <script src="https://cdn.ckeditor.com/4.15.1/full-all/ckeditor.js"></script> --}}
    <script>
        $('.btn-nav').click(function(e) {
            e.preventDefault();
            console.log('link:' + $(this).attr('href'))

            $('.contenu').load($(this).attr('href'))
        });
        CKEDITOR.replace( 'contenu' );
    </script>
@endsection

