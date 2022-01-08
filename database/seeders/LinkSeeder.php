<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // give each user a random number of links
        $campaigns = Campaign::get();

        foreach ($campaigns as $campaign) {
            $numberOfLinks = mt_rand(0, 10);
            $links = Link::factory()->count($numberOfLinks)->ownedBy($campaign->user_id)->create();

            $campaign->links()->attach($links->pluck('id'));
        }
    }
}
