<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Model;
use Crypt;
use App\User;
use App\Role;

class GenerateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate a user with roles and permissoins';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->ask("Please enter your name");
        $email = $this->ask("Please enter your email");
        $password = $this->secret("Please enter your password");

        $role_choice = $this->choice("Choose role you want have,seperated by comma", ["su", "user", "admin"], true, null, false);

        if ($this->confirm("Do you wish to generate? [y|N]"))
        {
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = bcrypt($password);
            $user->save();

            $role = Role::where('name', $role_choice)->first();
            $user->attachRole($role);
        }
        
        $this->info("success!");
    }
}
