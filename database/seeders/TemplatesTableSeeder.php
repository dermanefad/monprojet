<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tableau de données à insérer
        $templates = [
            [
                'libelle' => 'Modèle de contrat de vente',
                'contenu' => 'Ce modèle contient les clauses standard pour un contrat de vente entre deux parties.',
            ],
            [
                'libelle' => 'Modèle de CV professionnel',
                'contenu' => 'Un modèle de CV conçu pour les professionnels, mettant en avant les compétences et l\'expérience.',
            ],
            [
                'libelle' => 'Modèle de facture pour services',
                'contenu' => 'Un modèle de facture utilisé pour facturer des services rendus à des clients.',
            ],
            [
                'libelle' => 'Modèle de plan d\'affaires',
                'contenu' => 'Un modèle structuré pour rédiger un plan d\'affaires détaillé pour une entreprise.',
            ],
            [
                'libelle' => 'Modèle de politique de confidentialité',
                'contenu' => 'Un modèle standard de politique de confidentialité pour les sites web et applications.',
            ],
            [
                'libelle' => 'Modèle de contrat de travail',
                'contenu' => 'Ce modèle contient les termes et conditions typiques d\'un contrat de travail.',
            ],
            [
                'libelle' => 'Modèle de devis pour services',
                'contenu' => 'Un modèle de devis utilisé pour estimer le coût des services à fournir à un client.',
            ],
            [
                'libelle' => 'Modèle de présentation commerciale',
                'contenu' => 'Un modèle de présentation PowerPoint pour présenter les services d\'une entreprise à des clients potentiels.',
            ],
            [
                'libelle' => 'Modèle de statuts pour association',
                'contenu' => 'Un modèle de statuts réglementant le fonctionnement d\'une association à but non lucratif.',
            ],
            [
                'libelle' => 'Modèle de contrat de location',
                'contenu' => 'Ce modèle contient les conditions de location d\'un bien immobilier entre le propriétaire et le locataire.',
            ],
        ];

        // Insérer les données dans la table
        DB::table('templates')->insert(array_map(function ($template) {
            return array_merge($template, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $templates));
    }
}
