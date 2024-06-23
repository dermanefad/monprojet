<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LigneCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantite',
        'commandes_id',
        'tickets_id',
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'commandes_id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'tickets_id');
    }
}
