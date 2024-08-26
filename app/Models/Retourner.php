<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retourner extends Model
{
    use HasFactory;
    protected $table = 'retourners';
    protected $primaryKey = 'id';
        protected $fillable = [
            'id',
            'lecteur_id',
            'emprunt_id',
            'exemplaire_id',
            'Statut',
            'DateReturn',
        ];

}
