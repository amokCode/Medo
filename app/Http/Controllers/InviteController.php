<?php

namespace App\Http\Controllers;

use App\Invite;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function index()
    {
        $invites = Invite::all();

        return view('Invite.index', compact('invites'));
    }

    public function create()
    {
        return view('Invite.create');
    }

    public function store(Request $request)
    {
        Invite::create($request->all());

        Toastr::success('Elément bien ajouté');

        return redirect()->route('invite.create');
    }

    public function show($id)
    {
        $invite = Invite::findOrFail($id);

        return view('Invite.show', compact('invite'));
    }

    public function edit($id)
    {
        $invite = Invite::findOrFail($id);

        return view('Invite.edit', compact('invite'));
    }

    public function update(Request $request, $id)
    {
        $invite = Invite::findOrFail($id);
        $invite->update($request->all());

        Toastr::success('Elément bien mis à jour');

        return redirect()->route('invite.index');
    }

    public function destroy()
    {
        $inviteNom = Invite::findOrFail(request('id'))->nom;
        Invite::destroy(request('id'));

        return response($inviteNom);
    }

    public function destroyAll()
    {
        $elements = request('ids');

        foreach ($elements as $element) {
            Invite::destroy($element);
        }

        return $elements;
    }
}
