<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    protected $fillable = [
        'cours_id', 'nom_utilisateur', 'email_utilisateur', 'question'
    ];

    public function cours()
    {
        return $this->belongsTo(Cours::class);
    }
}
