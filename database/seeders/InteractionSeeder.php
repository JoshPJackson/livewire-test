<?php

namespace Database\Seeders;

use App\Models\CampaignLink;
use App\Models\Interaction;
use Illuminate\Database\Seeder;

class InteractionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campaignLinks = CampaignLink::get();

        foreach ($campaignLinks as $campaignLink) {
            $randomNumber = mt_rand(0, 1);

            if ($randomNumber === 1) {
                $interaction = Interaction::factory()->forCampaignLink($campaignLink->id)->make();
                $interaction->save();
            }
        }
    }
}
