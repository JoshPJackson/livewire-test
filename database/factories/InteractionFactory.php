<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InteractionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ip' => $this->faker->ipv4(),
            'user_agent' => $this->faker->userAgent()
        ];
    }

    public function forCampaignLink(int $campaignLinkId)
    {
        return $this->state(function (array $attributes) use ($campaignLinkId) {
            return [
                'campaign_link_id' => $campaignLinkId
            ];
        });
    }
}
