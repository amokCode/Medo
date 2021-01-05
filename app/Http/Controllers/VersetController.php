<?php

namespace App\Http\Controllers;

use App\Verset;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class VersetController extends Controller
{
    public function index()
    {
        $versets = Verset::all();

        return view('Verset.index', compact('versets'));
    }

    public function create()
    {
        return view('Verset.create');
    }

    public function store(Request $request)
    {
        Verset::create($request->all());

        Toastr::success('Elément bien ajouté');

        return redirect()->route('verset.create');
    }

    public function show($id)
    {
        $verset = Verset::findOrFail($id);

        return view('Verset.show', compact('verset'));
    }

    public function edit($id)
    {
        $verset = Verset::findOrFail($id);

        return view('Verset.edit', compact('verset'));
    }

    public function update(Request $request, $id)
    {
        $verset = Verset::findOrFail($id);
        $verset->update($request->all());

        Toastr::success('Elément bien mis à jour');

        return redirect()->route('verset.index');
    }

    public function destroy()
    {
        $versetNom = Verset::findOrFail(request('id'))->nom;
        Verset::destroy(request('id'));

        return response($versetNom);
    }

    public function destroyAll()
    {
        $elements = request('ids');

        foreach ($elements as $element) {
            Verset::destroy($element);
        }

        return $elements;
    }
}
