<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LigneCommande;
use App\Models\Commande;
use App\Models\Ticket;

class LigneCommandesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Récupérer toutes les commandes et tous les tickets
        $commandes = Commande::all();
        $tickets = Ticket::all();

        // Insérer 10 lignes de commande avec des données aléatoires
        for ($i = 0; $i < 10; $i++) {
            $randomCommande = $commandes->random();
            $randomTicket = $tickets->random();

            LigneCommande::create([
                'quantite' => rand(1, 10), // Quantité aléatoire entre 1 et 10
                'commandes_id' => $randomCommande->id,
                'tickets_id' => $randomTicket->id,
            ]);
        }
    }
}
