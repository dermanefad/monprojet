<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;
use PDF;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    
        $data =[
            "title" => "Liste des utilisateurs",
            "liste_entrepris" => Entreprise::all()
        ];
        
        return view("entreprises.index")->with($data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        Entreprise::create($request->all());

        return redirect()->route('entreprises.index')->with('success', 'Entreprise créée avec succès');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        //
        return view('entreprises.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $entreprise = Entreprise::findOrFail($id);
        return view('entreprises.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'quartier' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        
        $entreprise->update($request->all());

        return redirect()->route('entreprises.index')->with('success', 'Entreprise mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        //
        $entreprise->delete();
        return redirect()->route('entreprises.index')->with('success', 'Entreprise supprimée avec succès');
    }
    public function downloadPdf($id)
    { 
        $entreprise = Entreprise::findOrFail($id);
        $pdf = PDF::loadView('entreprises.pdf', compact('entreprise'));
        return $pdf->download('entreprise.pdf');
    }



    }

    

