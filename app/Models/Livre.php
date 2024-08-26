<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $table = 'livres';
    protected $primaryKey = 'ISBN';
        protected $fillable = [
            'ISBN',
            'Title',
            'Author',
            'Category',
            'PublisherYear',
            'PageNbr',
            'Editor',
            'Language',
            'fournisseur_id',
            'Statut',
            'Cover',
            'files',
        ];

    public function getIsbnAttribute($value)
    {
        // Modifiez cette logique selon vos besoins pour retourner la valeur souhaitée
        return  $value; // Par exemple, ajouter un préfixe à l'id
    }

    public function fournisseur()
    {
        return $this->belongsTo(Fournisseur::class, 'fournisseur_id');
    }

}
