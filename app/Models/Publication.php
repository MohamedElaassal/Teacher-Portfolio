<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $fillable = [
        'utilisateur_id', 'titre', 'lien','content'
    ];
}
