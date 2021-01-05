@extends((request()->ajax() ? 'layouts.master' : 'layouts.app'))

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/excel-bootstrap-table-filter-style.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            @include('Invite.delete_modal')
            @include('Invite.deleteAll_modal')
            <div class="form-group text-ridght">
                <button class="btn bg-danger-light btn-delete-all" data-togmgle="tooltip" data-plalcement="top"
                    title="Supprimer" data-toggle="modal" data-target="#deleteAllElement"><i
                        class="fa fa-trash"></i></button>
                <a href="{{ route('invite.index') }}" class="btn bg-warning-light" data-toggle="tooltip"
                    data-placement="top" title="Rafraîchir"><i class="fa fa-refresh"></i></a>
                <a href="" class="btn bg-success-light" data-toggle="tooltip" data-placement="top" title="Imprimer"><i
                        class="fa fa-print"></i></a>
                <a href="{{ route('invite.create') }}" class="btn-nav btn btn-primary pull-right"><i
                        class="fa fa-plus"></i> Ajouter </a>

            </div>

            <div class="card card-table">
                <div class="card-header bg-primary">
                    <h4 class="card-title text-center text-light"> Liste des Invites </h4>
                </div>
                <div class="card-body">
                    <div class="">
                        <table id="table" class="table mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="margin: 0px 0px 0px 9px;padding: 10px;">
                                                <input type="checkbox" class="checkbox-parent">
                                            </span>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th class="filter">Nom et Prénoms</th>
                                    <th class="filter">Téléphone</th>
                                    <th class="filter">Date d'invitation</th>
                                    <th class="filter">Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invites as $invite)
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input style="margin-left: 0.5px;" class="form-check-input checkbox-child"
                                                    type="checkbox" value="" id="invalidCheck" required="">
                                            </div>
                                        </td>
                                        <td data-id="{{ $invite->id }}">#{{ $loop->index + 1 }}</td>
                                        <td>{{ $invite->nom }}</td>
                                        <td>{{ $invite->telephone }}</td>
                                        <td>{{ $invite->date_invitation }}</td>
                                        <td>
                                            {{-- {{ $invite->statut }} --}}
                                            @if($invite->statut == "En attente") 
                                                <span class="bg-danger-light">{{ $invite->statut }}</span> 
                                            @elseif($invite->statut == "En cours") 
                                                <span class="bg-warning-light">{{ $invite->statut }}</span>
                                            @else 
                                                <span class="bg-success-light">{{ $invite->statut }}</span> 
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('invite.show', $invite->id) }}"
                                                class="btn bg-success-light btn-nav btn-sm mr-1" title="Voir">
                                                <span class="text-success"><i class="fa fa-eye"></i> Voir</span>
                                            </a>
                                            <a href="{{ route('invite.edit', $invite->id) }}"
                                                class="btn bg-warning-light btn-nav btn-sm mr-1" title="Modifier">
                                                <span class="text-warning"><i class="fa fa-pencil-square-o "></i>
                                                    Modifier</span>
                                            </a>
                                            <a href="#" class="btn bg-danger-light btn-sm btn-delete"
                                                data-nom="{{ $invite->nom }}" data-id="{{ $invite->id }}"
                                                data-toggle="modal" data-target="#deleteElement" title="Supprimer">
                                                <span class="text-danger"><i class="fa fa-trash"></i> Supprimer</span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/excel-bootstrap-table-filter-bundle.min.js') }}"></script>
    <script>
        $('#table').excelTableFilter();

        // Cache le bouton btn-delete-all
        $(".btn-delete-all").hide();

        // Affiche ou cache btn-delete-all
        function show_hide_delete_all(counterCheckbox) {
            if (counterCheckbox >= 2) {
                $(".btn-delete-all").show();
                $('.btn-delete').removeClass('visible').addClass('invisible');
            } else {
                $(".btn-delete-all").hide();
                $('.btn-delete').removeClass('invisible').addClass('visible');
            }
        }

        // Affiche le bouton de suppresion multiple si plus de 2 éléments sont selectionné
        var counterCheckbox = 0
        $(".checkbox-child").click(function(e) {
            if ($(this).is(":checked")) {
                counterCheckbox++
                $(this).closest('tr').addClass('bg-primary-light')
            } else {
                counterCheckbox--
                $(this).closest('tr').removeClass('bg-primary-light')
            }

            show_hide_delete_all(counterCheckbox)
        });

        // Sélectionner tout les checkbox
        var state = false
        // var counterCheckbox2 = 0
        $('.checkbox-parent').click(function() {
            state = !state

            if (state) {

                $(this).parent().addClass('bg-primary-light');
                $('.checkbox-child').not(this).prop('checked', this.checked);
                //add primary background to tr checked
                $('.checkbox-child').closest('tr').addClass('bg-primary-light')

                // Reccupère le nombre de checkbox-child checké
                counterCheckbox = $('tbody td .checkbox-child').filter(':checked').length

            } else {
                $(this).parent().removeClass('bg-primary-light');
                $('.checkbox-child').not(this).prop('checked', this.checked);
                //delete primary background to tr unchecked
                $('.checkbox-child').closest('tr').removeClass('bg-primary-light')

                // Reccupère le nombre de checkbox-child non-checké
                counterCheckbox = $('tbody td .checkbox-child').filter(':checked').length
            }

            show_hide_delete_all(counterCheckbox)
        })

        // Affiche les lignes selectionnées si le bouton delete est cliqué
        $('.btn-delete-all').click(function(e) {
            var ids = [];

            $("table input[type=checkbox]:checked").each(function() {
                ids.push($(this).closest("tr").find("td:eq(1)").data('id'));

                // console.log(ids)

                $('.elements').data('ids', ids);
            })
        });


        // rafraîchit la page sans la recharger après click sur un bouton
        $('.btn-nav').click(function(e) {
            e.preventDefault();
            console.log('link:' + $(this).attr('href'))

            $('.contenu').load($(this).attr('href'))
        });

        //Envoie le nom et l'id de l'élément à delete_modal
        var idElement
        $(".btn-delete").click(function() {
            idElement = $(this).data('id')
            nomElement = $(this).data('nom')

            $(".nomElement").text(nomElement);
            $(".nomElement").data('id', idElement);
        });
    </script>
@endsection
