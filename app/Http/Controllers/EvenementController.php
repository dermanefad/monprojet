<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use PDF;


class EvenementController extends Controller
{
    public function index()
    {
        $evenements = Evenement::all();
        return view('evenements.index', compact('evenements'));
    }

    public function create()
    {
        return view('evenements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'gps' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'heur_debut' => 'required|date_format:H:i',
            'heur_fin' => 'required|date_format:H:i',
            'entreprises_id' => 'required|integer|exists:entreprises,id',
        ]);

        Evenement::create($request->all());

        return redirect()->route('evenements.index')->with('success', 'Événement créé avec succès');
    }

    public function show(Evenement $evenement)
    {
        return view('evenements.show', compact('evenement'));
    }

    public function edit(Evenement $evenement)
    {
        //$entreprises = Entreprise::all();
        return view('evenements.edit', compact('evenement'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'gps' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'heur_debut' => 'required|date_format:H:i',
            'heur_fin' => 'required|date_format:H:i',
            'entreprises_id' => 'required|integer|exists:entreprises,id',
        ]);
        $entreprise = Evenement::findOrFail($id);
        $evenement->update($request->all());
        
        return redirect()->route('evenements.index')->with('success', 'Événement mis à jour avec succès');
    }

    public function destroy(Evenement $evenement)
    {
        $evenement->delete();

        return redirect()->route('evenements.index')->with('success', 'Événement supprimé avec succès');
    }

    public function downloadPdf($id)
    {
        $evenement = Evenement::findOrFail($id);

        $pdf = PDF::loadView('evenements.pdf', compact('evenement'));
        return $pdf->download('evenement.pdf');
    }
}
