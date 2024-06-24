<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Evenement;
use App\Models\Template;
use Illuminate\Http\Request;
use PDF;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {
        $evenements = Evenement::all();
        $templates = Template::all();
        return view('tickets.create', compact('evenements', 'templates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'prix' => 'required|string|max:255',
            'nombre_place' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'evenements_id' => 'required|integer|exists:evenements,id',
            'templates_id' => 'required|integer|exists:templates,id',
        ]);

        Ticket::create($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket créé avec succès');
    }

    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    public function edit($id)
{
    $ticket = Ticket::findOrFail($id);
    $evenements = Evenement::all();
    $templates = Template::all();
    return view('tickets.edit', compact('ticket', 'evenements', 'templates'));
}


    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'prix' => 'required|string|max:255',
            'nombre_place' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'evenements_id' => 'required|integer|exists:evenements,id',
            'templates_id' => 'required|integer|exists:templates,id',
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')->with('success', 'Ticket mis à jour avec succès');
    }

    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')->with('success', 'Ticket supprimé avec succès');
    }

    // public function downloadPDF($id)
    // {
    //     $ticket = Ticket::findOrFail($id);
    //     $pdf = PDF::loadView('tickets.pdf', compact('ticket'));
    //     return $pdf->download('ticket_details.pdf');
    // }

    public function downloadPdf(Ticket $ticket)
    {
        dump($ticket);
        $pdf = PDF::loadView('tickets.pdf', compact('ticket'));
        return $pdf->download('ticket-details.pdf');
    }
}
