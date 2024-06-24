<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\LigneCommandeController;

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
use App\Http\Controllers\AuthController;
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';




   
Route::get('entreprises', [EntrepriseController::class, 'index'])->name('entreprises.index');
Route::get('entreprises/create', [EntrepriseController::class, 'create'])->name('entreprises.create');
Route::post('entreprises', [EntrepriseController::class, 'store'])->name('entreprises.store');
Route::get('entreprises/{entreprise}', [EntrepriseController::class, 'show'])->name('entreprises.show');
Route::get('entreprises/{entreprise}/edit', [EntrepriseController::class, 'edit'])->name('entreprises.edit');
Route::put('entreprises/{entreprise}', [EntrepriseController::class, 'update'])->name('entreprises.update');
Route::delete('entreprises/{entreprise}', [EntrepriseController::class, 'destroy'])->name('entreprises.destroy');
// Route pour télécharger le PDF
Route::get('entreprises/{id}/downloadPdf', [EntrepriseController::class, 'downloadPdf'])->name('entreprises.downloadPdf');


Route::get('/evenements', [EvenementController::class, 'index'])->name('evenements.index');
Route::get('/evenements/create', [EvenementController::class, 'create'])->name('evenements.create');
Route::post('/evenements', [EvenementController::class, 'store'])->name('evenements.store');
Route::get('/evenements/{evenement}', [EvenementController::class, 'show'])->name('evenements.show');
Route::get('/evenements/{evenement}/edit', [EvenementController::class, 'edit'])->name('evenements.edit');
Route::put('/evenements/{id}', [EvenementController::class, 'update'])->name('evenements.update');
Route::delete('/evenements/{evenement}', [EvenementController::class, 'destroy'])->name('evenements.destroy');
Route::get('/evenements/pdf/{id}', [EvenementController::class, 'downloadPdf'])->name('evenements.downloadPdf');





Route::get('/templates', [TemplateController::class, 'index'])->name('templates.index');
Route::get('/templates/create', [TemplateController::class, 'create'])->name('templates.create');
Route::post('/templates', [TemplateController::class, 'store'])->name('templates.store');
Route::get('/templates/{template}', [TemplateController::class, 'show'])->name('templates.show');
Route::get('/templates/{template}/edit', [TemplateController::class, 'edit'])->name('templates.edit');
Route::put('/templates/{template}', [TemplateController::class, 'update'])->name('templates.update');
Route::delete('/templates/{template}', [TemplateController::class, 'destroy'])->name('templates.destroy');



Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
Route::get('/tickets/{ticket}/edit', [TicketController::class, 'edit'])->name('tickets.edit');
Route::put('/tickets/{ticket}', [TicketController::class, 'update'])->name('tickets.update');
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy');




Route::get('/commandes', [CommandeController::class, 'index'])->name('commandes.index');
Route::get('/commandes/create', [CommandeController::class, 'create'])->name('commandes.create');
Route::post('/commandes', [CommandeController::class, 'store'])->name('commandes.store');
Route::get('/commandes/{commande}', [CommandeController::class, 'show'])->name('commandes.show');
Route::get('/commandes/{commande}/edit', [CommandeController::class, 'edit'])->name('commandes.edit');
Route::put('/commandes/{commande}', [CommandeController::class, 'update'])->name('commandes.update');
Route::delete('/commandes/{commande}', [CommandeController::class, 'destroy'])->name('commandes.destroy');
Route::get('/commandes/{commande}/download-pdf', [CommandeController::class, 'downloadPDF'])->name('commandes.downloadPDF');




Route::get('/ligne_commandes', [LigneCommandeController::class, 'index'])->name('ligne_commandes.index');
Route::get('/ligne_commandes/create', [LigneCommandeController::class, 'create'])->name('ligne_commandes.create');
Route::post('/ligne_commandes', [LigneCommandeController::class, 'store'])->name('ligne_commandes.store');
Route::get('/ligne_commandes/{id}', [LigneCommandeController::class, 'show'])->name('ligne_commandes.show');
Route::get('/ligne_commandes/{id}/edit', [LigneCommandeController::class, 'edit'])->name('ligne_commandes.edit');
Route::put('/ligne_commandes/{id}', [LigneCommandeController::class, 'update'])->name('ligne_commandes.update');
Route::delete('/ligne_commandes/{id}', [LigneCommandeController::class, 'destroy'])->name('ligne_commandes.destroy');



