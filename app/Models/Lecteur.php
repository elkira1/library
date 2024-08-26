<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecteur extends Model
{
    protected $table = 'lecteurs';
    protected $primaryKey = 'id';
     protected $fillable = [
          'id',
          'FirstName',
          'LastName',
          'BirthDate',
          'Gender',
          'RegisterDate',
          'Occupation',
          'Address',
          'Email',
          'Phone',
      ];
    use HasFactory;
}
