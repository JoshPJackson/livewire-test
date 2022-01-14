<?php

namespace App\Models;

use App\Models\Scopes\OwnedByAuthedUser;

class UserLink extends Link
{
    protected $table = 'links';

    protected static function booted()
    {
        static::addGlobalScope(new OwnedByAuthedUser('owner_user_id'));
    }
}
