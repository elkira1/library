<?php

namespace App\Http\Controllers;

use App\Models\Retourner;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RetournerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returns = Retourner::all();
        return view('retourner.index',compact('returns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $returns = Retourner::all();
        return view('retourner.create',compact('returns'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id',
            'lecteur_id',
            'personnel_id',
            'emprunt_id',
            'exemplaire_id',
            'Statut',
            'DateReturn',

        ]);

        Retourner::create($request->all());

        return redirect()->route('retourner.index')
                        ->with('success','Book Return successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $return = Retourner::find($id);

        return view('retourner.show',compact('return'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $return = Retourner::find($id);
        return view('retourner.edit',compact('return'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'lecteur_id',
            'personnel_id',
            'emprunt_id',
            'exemplaire_id',
            'Statut',
            'DateReturn',
        ]);

        $return = Retourner::find($id);
        $return->update($request->all());

        return redirect()->route('retourner.index')
                        ->with('success','Return information updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $return = Retourner::find($id);
        $return->delete();

        return redirect()->route('retourner.index')
            ->with('success', 'Return information deleted successfully');

    }
}
