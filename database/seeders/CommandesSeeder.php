<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Commande;
use App\Models\User;
use Carbon\Carbon;

class CommandesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Récupérer tous les utilisateurs
        $users = User::all();

        // Insérer 10 commandes avec des dates différentes
        for ($i = 0; $i < 10; $i++) {
            $randomUser = $users->random();
            $date = Carbon::now()->subDays(rand(1, 30)); // Date aléatoire dans les 30 derniers jours

            Commande::create([
                'date' => $date,
                'user_id' => $randomUser->id,
            ]);
        }
    }
}
