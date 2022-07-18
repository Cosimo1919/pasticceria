<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'diventa admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $email = $this->ask("Inserisci l'email dell'utente che vuoi rendere admin");

        $user = User::where('email', $email)->first();

        if (!$user) {
            $this->error("Utente non trovato");
            return;
        }

        $user->role = 'admin';
        $user->save();
        $this->info("L'utente {$user->name} e' l'admin.");
    }
}
