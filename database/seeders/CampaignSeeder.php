<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = User::get()->pluck(['id']);

        foreach ($userIds as $userId) {
            $numberOfCampaigns = mt_rand(0, 5);

            Campaign::factory()->count($numberOfCampaigns)->create([
                'user_id' => $userId,
            ]);
        }
    }
}
