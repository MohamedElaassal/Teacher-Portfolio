<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Filament\Models\Contracts\HasName;

class User extends Authenticatable implements HasName
{
    use HasFactory;

    public $timestamps = true; // Ensure timestamps are enabled

    protected $fillable = [
        'name', 'nickname', 'email', 'password', 'biographie',
        'img', 'google_scholar', 'is_admin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getUserName(): string
    {
        return $this->nom ?? $this->nickname ?? $this->email ?? 'Unknown User';
    }

    public function getFilamentName(): string
    {
        return $this->nom ?? $this->nickname ?? $this->email ?? 'Unknown User';
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
