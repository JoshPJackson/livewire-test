<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultCampaignSeeder extends Seeder
{
    /**
     * Give each user a default campaign
     *
     * @return void
     */
    public function run()
    {
        $userIds = User::get()->pluck(['id']);

        foreach ($userIds as $userId) {
            Campaign::factory()->create([
                'user_id' => $userId,
                'name' => 'Default'
            ]);
        }
    }
}
