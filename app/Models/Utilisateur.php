<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\HasName;

class Utilisateur extends Authenticatable implements HasName
{
    use HasFactory;

    public $timestamps = true; // Ensure timestamps are enabled

    protected $fillable = [
        'nom', 'prenom', 'email', 'mot_de_passe', 'biographie',
        'img', 'google_scholar', 'is_admin'
    ];

    protected $hidden = [
        'mot_de_passe', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->mot_de_passe;
    }

    public function getUserName(): string
    {
        return $this->nom ?? $this->prenom ?? $this->email ?? 'Unknown User';
    }

    public function getFilamentName(): string
    {
        return $this->nom ?? $this->prenom ?? $this->email ?? 'Unknown User';
    }

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
