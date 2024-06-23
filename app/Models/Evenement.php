<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'pays',
        'ville',
        'adresse',
        'gps',
        'description',
        'date',
        'heur_debut',
        'heur_fin',
        'entreprises_id',
    ];

    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class, 'entreprises_id');
    }
}
