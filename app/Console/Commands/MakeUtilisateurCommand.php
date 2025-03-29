<?php

namespace App\Console\Commands;

use App\Models\Utilisateur;
use Illuminate\Console\Command;

class MakeUtilisateurCommand extends Command
{
    protected $signature = 'make:filament-user';
    protected $description = 'Create a new Filament user in the utilisateurs table';

    public function handle(): int
    {
        $name = $this->ask('Name');
        $prenom = $this->ask('Prenom');
        $email = $this->ask('Email address');
        $password = $this->secret('Password');

        Utilisateur::create([
            'nom' => $name,
            'prenom' => $prenom,
            'email' => $email,
            'mot_de_passe' => bcrypt($password),
            'is_admin' => true, // Set this to true for Filament admin users
        ]);

        $this->info("User [{$name}] created successfully in the utilisateurs table.");

        return Command::SUCCESS;
    }
}
