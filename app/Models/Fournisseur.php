<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fournisseur extends Model
{
    use HasFactory;
    protected $table = 'fournisseurs';
    protected $primaryKey = 'id';
        protected $fillable = [
            'id',
            'FirstName',
            'LastName',
            'Address',
            'Phone',
            'Org',
        ];


}
