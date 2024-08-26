<?php

namespace App\Http\Controllers;

use App\Models\Lecteur;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $readers = Lecteur::all();
        return view('lecteur.index', compact('readers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lecteur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
          'FirstName',
          'LastName',
          'BirthDate',
          'Gender',
          'RegisterDate',
          'Occupation',
          'Address',
          'Email',
          'Phone',
        ]);

        Lecteur::create($request->all());

        return redirect()->route('lecteur.index')
                        ->with('success','Lecteur Added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $lecteur = Lecteur::find($id);

        return view('lecteur.show',compact('lecteur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reader = Lecteur::find($id);
        return view('lecteur.edit',compact('reader'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
          'FirstName',
          'LastName',
          'BirthDate',
          'Gender',
          'RegisterDate',
          'Occupation',
          'Address',
          'Email',
          'Phone',
        ]);

        $lecteur = Lecteur::find($id);
        $lecteur->update($request->all());

        return redirect()->route('lecteur.index')
                        ->with('success','Lecteur updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lecteur $lecteur)
    {

        $lecteur = Lecteur::find($id);
        $lecteur->delete();

        return redirect()->route('lecteur.index')
            ->with('success', 'Lecteur deleted successfully');

    }
}
