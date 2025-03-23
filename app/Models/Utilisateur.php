<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'email', 'mot_de_passe', 'biographie',
        'img', 'google_scholar', 'is_admin'
    ];
}
