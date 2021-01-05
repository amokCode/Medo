@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('content')

@include('Invite.form', [$title='Modifier Invite', $show=false])

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

