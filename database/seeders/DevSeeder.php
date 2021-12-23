<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->whereIn('email', [
            'joshpjackson12@gmail.com'
        ])->delete();

        User::create([
            'name' => 'Josh Jackson',
            'email' => 'joshpjackson12@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
