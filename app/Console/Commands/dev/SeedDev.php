<?php

namespace App\Console\Commands\dev;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class SeedDev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dev:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed user accounts needed for dev';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        User::query()->where('email', 'joshpjackson12@gmail.com')->delete();

        $joshDev = new User();
        $joshDev->name = 'Josh Jackson';
        $joshDev->email = 'joshpjackson12@gmail.com';
        $joshDev->password = Hash::make('password');
        $joshDev->email_verified_at = now();
        $joshDev->save();

        if ($joshDev->id) {
            return Command::SUCCESS;
        }

        return Command::FAILURE;
    }
}
