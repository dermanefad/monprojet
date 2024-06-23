<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Entreprise extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'pays',
        'ville',
        'quartier',
        'adresse',
        'user_id'
    ];

    public function evenements()
    {
        return $this->hasMany(Evenement::class, 'entreprises_id');
    }

    public function user(): BelongsTo{
            return $this->belongsTo(User::class);
        }
   

}
