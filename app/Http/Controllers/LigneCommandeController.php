<?php

namespace App\Http\Controllers;

use App\Models\LigneCommande;
use App\Models\Commande;
use App\Models\Ticket;
use Illuminate\Http\Request;
use PDF;

class LigneCommandeController extends Controller
{
    public function index()
    {
        $ligneCommandes = LigneCommande::with('commande', 'ticket')->get();
        return view('ligne_commandes.index', compact('ligneCommandes'));
    }

    public function create()
    {
        $commandes = Commande::all();
        $tickets = Ticket::all();
        return view('ligne_commandes.create', compact('commandes', 'tickets'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'quantite' => 'required|integer',
            'commandes_id' => 'required|exists:commandes,id',
            'tickets_id' => 'required|exists:tickets,id',
        ]);

        LigneCommande::create($request->all());
        return redirect()->route('ligne_commandes.index')->with('success', 'Ligne de commande créée avec succès');
    }

    public function show($id)
    {
        $ligneCommande = LigneCommande::with('commande', 'ticket')->findOrFail($id);
        return view('ligne_commandes.show', compact('ligneCommande'));
    }

    public function edit($id)
    {
        $ligneCommande = LigneCommande::findOrFail($id);
        $commandes = Commande::all();
        $tickets = Ticket::all();
        return view('ligne_commandes.edit', compact('ligneCommande', 'commandes', 'tickets'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'quantite' => 'required|integer',
            'commandes_id' => 'required|exists:commandes,id',
            'tickets_id' => 'required|exists:tickets,id',
        ]);

        $ligneCommande = LigneCommande::findOrFail($id);
        $ligneCommande->update($request->all());
        return redirect()->route('ligne_commandes.index')->with('success', 'Ligne de commande mise à jour avec succès');
    }

    public function destroy($id)
    {
        $ligneCommande = LigneCommande::findOrFail($id);
        $ligneCommande->delete();
        return redirect()->route('ligne_commandes.index')->with('success', 'Ligne de commande supprimée avec succès');
    }

    public function downloadPdf($id)
    {
        $ligneCommande = LigneCommande::with('commande', 'ticket')->findOrFail($id);
        $pdf = PDF::loadView('ligne_commandes.pdf', compact('ligneCommande'));
        return $pdf->download('ligne_commande_' . $ligneCommande->id . '.pdf');
    }
}
