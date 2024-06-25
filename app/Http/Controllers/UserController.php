<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class UserController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    
        $data =[
            "title" => "Liste des utilisateurs",
            "liste_entrepris" => User::all()
        ];
        
        return view("User.index")->with($data);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|string|max:255|unique:users',
            'status' => 'required|in:user,admin',
            'password' => 'required|string|min:8',
        ]);

        User::create($request->all());

        return redirect()->route('User.index')->with('success', 'Entreprise créée avec succès');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(User $entreprise)
    {
        //
        return view('User.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $entreprise = User::findOrFail($id);
        return view('User.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $entreprise)
    {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'contact' => 'required|string|max:255|unique:users',
            'status' => 'required|in:user,admin',
            'password' => 'required|string|min:8',
        ]);
        
        $entreprise->update($request->all());

        return redirect()->route('User.index')->with('success', 'Entreprise mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $entreprise)
    {
        //
        $entreprise->delete();
        return redirect()->route('User.index')->with('success', 'Entreprise supprimée avec succès');
    }
    public function downloadPdf($id)
    { 
        $entreprise = User::findOrFail($id);
        $pdf = PDF::loadView('User.pdf', compact('entreprise'));
        return $pdf->download('entreprise.pdf');
    }



    }

    


