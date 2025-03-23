<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $fillable = [
        'utilisateur_id', 'titre', 'description','content'
    ];
}
