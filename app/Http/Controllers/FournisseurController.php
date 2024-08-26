<?php

namespace App\Http\Controllers;

use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class FournisseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Fournisseur::all();
        return view('fournisseur.index', compact('suppliers'));
    }


    public function userindex()
    {
        $suppliers = Fournisseur::all();
        return view('fournisseur.userindex', compact('suppliers'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $supplier = Fournisseur::all();
        return view('fournisseur.create', compact('supplier'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id',
            'FirstName',
            'LastName',
            'Address',
            'Phone',
            'Org',
        ]);

        Fournisseur::create($request->all());

        return redirect()->route('fournisseur.index')
                        ->with('success',' New Supplier Added successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $supplier = Fournisseur::find($id);

        return view('fournisseur.show',compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $supplier = Fournisseur::find($id);
        return view('fournisseur.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'FirstName',
            'LastName',
            'Address',
            'Address',
            'Phone',
            'Org',
        ]);

        $supplier = Fournisseur::find($id);
        $supplier->update($request->all());

        return redirect()->route('fournisseur.index')
                        ->with('success','Supplier Information updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $supplier = Fournisseur::find($id);
        $supplier->delete();

        return redirect()->route('fournisseur.index')
            ->with('success', 'Supplier deleted successfully');
    }
}
