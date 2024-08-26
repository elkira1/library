<?php

namespace App\Http\Controllers;

use App\Models\Emprunt;
use App\Models\Lecteur;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class EmpruntController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Lecteur::all();
        $borrows= Emprunt::all();
        return view('emprunt.index', compact('borrows','readers'));

    }


    public function userindex()
    {
        $borrows= Emprunt::all();
        return view('emprunt.userindex', compact('borrows'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $readers = Lecteur::all();
        return view('emprunt.create', compact('readers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'lecteur_id',
            'exemplaire_id',
            'Statut',
            'DateEmprunt',
        ]);

        Emprunt::create($request->all());

        return redirect()->route('emprunt.index')
                        ->with('success','A book  borrowed successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $borrow = Emprunt::find($id);

        return view('emprunt.show',compact('borrow'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $borrow = Emprunt::find($id);
        return view('emprunt.edit',compact('borrow'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'lecteur_id',
            'exemplaire_id',
            'Statut',
            'DateEmprunt',
        ]);

        $borrow = Emprunt::find($id);
        $borrow->update($request->all());

        return redirect()->route('emprunt.index')
                        ->with('success','Borrow information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $borrow = Emprunt::find($id);
        $borrow->delete();

        return redirect()->route('emprunt.index')
            ->with('success', 'Borrow information deleted successfully');
    }
}
