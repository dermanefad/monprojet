<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assurez-vous que ces ID existent dans vos tables 'evenements' et 'templates'
        $evenements = DB::table('evenements')->pluck('id')->toArray();
        $templates = DB::table('templates')->pluck('id')->toArray();

        if (empty($evenements) || empty($templates)) {
            throw new \Exception('Assurez-vous que les tables evenements et templates contiennent des enregistrements avant exécuter ce seeder.');
        }

        $tickets = [
            [
                'libelle' => 'Ticket Standard',
                'prix' => '50',
                'nombre_place' => '100',
                'type' => 'Standard',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket VIP',
                'prix' => '150',
                'nombre_place' => '20',
                'type' => 'VIP',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Famille',
                'prix' => '200',
                'nombre_place' => '50',
                'type' => 'Famille',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Étudiant',
                'prix' => '30',
                'nombre_place' => '80',
                'type' => 'Étudiant',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Premium',
                'prix' => '250',
                'nombre_place' => '10',
                'type' => 'Premium',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Enfant',
                'prix' => '20',
                'nombre_place' => '150',
                'type' => 'Enfant',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket VIP Gold',
                'prix' => '500',
                'nombre_place' => '5',
                'type' => 'VIP Gold',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Senior',
                'prix' => '40',
                'nombre_place' => '70',
                'type' => 'Senior',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Business',
                'prix' => '300',
                'nombre_place' => '30',
                'type' => 'Business',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'libelle' => 'Ticket Festival',
                'prix' => '100',
                'nombre_place' => '200',
                'type' => 'Festival',
                'evenements_id' => $evenements[array_rand($evenements)],
                'templates_id' => $templates[array_rand($templates)],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        // Insérer les données dans la table
        DB::table('tickets')->insert($tickets);
    }
}
