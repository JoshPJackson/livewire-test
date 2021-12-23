<?php

namespace Database\Factories;

use App\Models\CampaignLink;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CampaignLinkFactory extends Factory
{
    protected $model = CampaignLink::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => substr(sha1(Str::random(10)), 0, 5),
            'destination' => $this->faker->url(),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }

    public function ownedBy(int $userId)
    {
        return $this->state(function (array $attributes) use ($userId) {
            return [
                'owner_user_id' => $userId,
            ];
        });
    }
}
