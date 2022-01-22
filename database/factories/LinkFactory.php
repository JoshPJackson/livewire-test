<?php

namespace Database\Factories;

use App\Enums\LinkStatus;
use App\Models\Link;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class LinkFactory extends Factory
{
    protected $model = Link::class;

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
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'status' => Arr::random(LinkStatus::cases())
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
