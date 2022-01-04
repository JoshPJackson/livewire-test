<?php

namespace App\Models;

use App\Models\Scopes\OwnedByAuthedUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserCampaign extends Campaign
{
    use HasFactory;

    protected $table = 'campaigns';

    protected static function booted()
    {
        static::addGlobalScope(new OwnedByAuthedUser);
    }
}
