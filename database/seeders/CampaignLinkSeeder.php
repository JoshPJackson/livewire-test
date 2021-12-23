<?php

namespace Database\Seeders;

use App\Models\CampaignLink;
use App\Models\User;
use Illuminate\Database\Seeder;

class CampaignLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // give each user a random number of links
        $users = User::query()->toBase()->get();

        foreach ($users as $user) {
            $numberOfLinks = mt_rand(0, 10);
            CampaignLink::factory()->count($numberOfLinks)->ownedBy($user->id)->create();
        }
    }
}
