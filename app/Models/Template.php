<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'libelle',
        'contenu',
    ];

    // Définir une éventuelle relation. Par exemple, si un template appartient à une entreprise, vous pouvez ajouter cette relation ici.
    // public function entreprise()
    // {
    //     return $this->belongsTo(Entreprise::class, 'entreprises_id');
    // }
}
