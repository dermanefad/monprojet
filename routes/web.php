<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



use App\Http\Controllers\EntrepriseController;

Route::get('entreprises', [EntrepriseController::class, 'index'])->name('entreprises.index');
Route::get('entreprises/create', [EntrepriseController::class, 'create'])->name('entreprises.create');
Route::post('entreprises', [EntrepriseController::class, 'store'])->name('entreprises.store');
Route::get('entreprises/{entreprise}', [EntrepriseController::class, 'show'])->name('entreprises.show');
Route::get('entreprises/{entreprise}/edit', [EntrepriseController::class, 'edit'])->name('entreprises.edit');
Route::put('entreprises/{entreprise}', [EntrepriseController::class, 'update'])->name('entreprises.update');
Route::delete('entreprises/{entreprise}', [EntrepriseController::class, 'destroy'])->name('entreprises.destroy');

// Route pour télécharger le PDF
Route::get('entreprises/{id}/downloadPdf', [EntrepriseController::class, 'downloadPdf'])->name('entreprises.downloadPdf');


use App\Http\Controllers\TemplateController;

Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
Route::get('/templates/create', [TemplateController::class, 'create'])->name('templates.create');
Route::post('/templates', [TemplateController::class, 'store'])->name('templates.store');
Route::get('/templates/{template}', [TemplateController::class, 'show'])->name('templates.show');
Route::get('/templates/{template}/edit', [TemplateController::class, 'edit'])->name('templates.edit');
Route::put('/templates/{template}', [TemplateController::class, 'update'])->name('templates.update');
Route::delete('/templates/{template}', [TemplateController::class, 'destroy'])->name('templates.destroy');


use App\Http\Controllers\TicketController;

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('/tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');



use App\Http\Controllers\CommandeController;

// Liste des commandes
Route::get('/commandes', [CommandeController::class, 'index'])->name('commandes.index');

// Afficher le formulaire de création de commande
Route::get('/commandes/create', [CommandeController::class, 'create'])->name('commandes.create');

// Enregistrer une nouvelle commande
Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.store');

// Afficher les détails d'une commande
Route::get('/commandes/{commande}', [CommandeController::class, 'show'])->name('commandes.show');

// Afficher le formulaire de modification de commande
Route::get('/commandes/{commande}/edit', [CommandeController::class, 'edit'])->name('commandes.edit');

// Mettre à jour une commande
Route::put('/commandes/{commande}', [CommandeController::class, 'update'])->name('commandes.update');

// Supprimer une commande
Route::delete('/commandes/{commande}', [CommandeController::class, 'destroy'])->name('commandes.destroy');

// Télécharger en PDF les détails d'une commande
Route::get('/commandes/{commande}/download-pdf', [CommandeController::class, 'downloadPDF'])->name('commandes.downloadPDF');



use App\Http\Controllers\LigneCommandeController;

Route::get('/ligne_commandes', [LigneCommandeController::class, 'index'])->name('ligne_commandes.index');
Route::get('/ligne_commandes/create', [LigneCommandeController::class, 'create'])->name('ligne_commandes.create');
Route::post('/ligne_commandes', [LigneCommandeController::class, 'store'])->name('ligne_commandes.store');
Route::get('/ligne_commandes/{id}', [LigneCommandeController::class, 'show'])->name('ligne_commandes.show');
Route::get('/ligne_commandes/{id}/edit', [LigneCommandeController::class, 'edit'])->name('ligne_commandes.edit');
Route::put('/ligne_commandes/{id}', [LigneCommandeController::class, 'update'])->name('ligne_commandes.update');
Route::delete('/ligne_commandes/{id}', [LigneCommandeController::class, 'destroy'])->name('ligne_commandes.destroy');
