<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commande::all();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
    {
        $users = User::all();
        return view('commandes.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        Commande::create($request->all());

        return redirect()->route('commandes.index')->with('success', 'Commande créée avec succès');
    }

    public function show(Commande $commande)
    {
        return view('commandes.show', compact('commande'));
    }

    public function edit(Commande $commande)
    {
        $users = User::all();
        return view('commandes.edit', compact('commande', 'users'));
    }

    public function update(Request $request, Commande $commande)
    {
        $request->validate([
            'date' => 'required',
            'user_id' => 'required|exists:users,id',
        ]);

        $commande->update($request->all());

        return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès');
    }

    public function destroy(Commande $commande)
    {
        $commande->delete();
        return redirect()->route('commandes.index')->with('success', 'Commande supprimée avec succès');
    }

    public function downloadPDF(Commande $commande)
    {
        $pdf = PDF::loadView('commandes.pdf', compact('commande'));
        return $pdf->download('commande.pdf');
    }
}
