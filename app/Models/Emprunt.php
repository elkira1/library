<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    use HasFactory;
    protected $table = 'emprunts';
    protected $primaryKey = 'id';
        protected $fillable = [
            'id',
            'lecteur_id',
            'Statut',
            'DateEmprunt',
        ];

        public function lecteur()
        {
            return $this->belongsTo(Lecteur::class, 'lecteur_id');
        }

}
