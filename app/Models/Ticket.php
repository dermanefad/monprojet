<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'libelle',
        'prix',
        'nombre_place',
        'type',
        'evenements_id',
        'templates_id',
    ];

    public function evenement()
    {
        return $this->belongsTo(Evenement::class, 'evenements_id');
    }

    public function template()
    {
        return $this->belongsTo(Template::class, 'templates_id');
    }
}
