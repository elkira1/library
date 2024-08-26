<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Fournisseur;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function dashboard()
    {
        if(Auth::id())
        {
           $role=Auth()->user()->role;

           if($role=="user")
           {
             return view('home.dashboard');
           }

           else if($role=="admin")
           {
             return view('home.adminDashboard');
           }
        }
    }

    public function userindex()
    {

    $books = Livre::paginate(2); // Affiche 10 livres par page

    return view('livre.userindex',compact('books'));

    }

    public function index()
    {

        $suppliers = Fournisseur::all();
        $books = Livre::all();
        return view('livre.index', compact('books', 'suppliers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Fournisseur::all();
        $books = Livre::all();
        return view('livre.create', compact('books','suppliers'));

    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'ISBN' => 'required',
            'Title' => 'required',
            'Author' => 'required',
            'Category' => 'required',
            'PublisherYear' => 'required',
            'PageNbr' => 'required',
            'Editor' => 'required',
            'Language' => 'required',
            'fournisseur_id' => 'required',
            'Cover' => 'required|image',
            'files' => 'required|mimes:pdf',

        ]);

        // Enregistrer l'image de couverture
        $coverFile = $request->file('Cover'); // Récupérer le fichier de couverture
        $coverPath = $coverFile->store('covers', 'public'); // Enregistrer le fichier dans le répertoire de stockage

        // Traitement du fichier PDF (files)
        $pdfFile = $request->file('files'); // Récupérer le fichier PDF
        $pdfPath = $pdfFile->store('pdfs', 'public');

        // Créer un nouveau livre
        Livre::create([
            'ISBN' => $request->ISBN,
            'Title' => $request->Title,
            'Author' => $request->Author,
            'Category' => $request->Category,
            'PublisherYear' => $request->PublisherYear,
            'PageNbr' => $request->PageNbr,
            'Editor' => $request->Editor,
            'Language' => $request->Language,
            'fournisseur_id' => $request->fournisseur_id,
            'Statut' => $request->Statut,
            'Cover' => $coverPath, // Chemin de l'image de couverture
            'files' => $pdfPath, // Chemin du fichier PDF
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('livre.index')
            ->with('success', 'Book added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($ISBN)
    {
        $book = Livre::find($ISBN);

        return view('livre.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ISBN)
    {
        $book = Livre::find($ISBN);
        return view('livre.edit',compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $ISBN)
    {

        $request->validate([
            'ISBN',
            'Title',
            'Author',
            'Category',
            'PublisherYear',
            'PageNbr',
            'Editor',
            'Language',
            'fournisseur_id',
            'Statut',
            'Cover',
            'files'
        ]);

        $book = Livre::find($ISBN);
        $book->update($request->all());

        return redirect()->route('livre.index')
                        ->with('success','Book updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ISBN)
    {

        $book = Livre::find($ISBN);
        $book->delete();

        return redirect()->route('livre.index')
            ->with('success', 'Book deleted successfully');

    }
}
