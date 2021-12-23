<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CampaignLink extends Model
{
    use HasFactory;

    public $fillable = [
        'path',
        'destination',
        'owner_user_id',
    ];

    public function currentOwner(): BelongsTo|User
    {
        return $this->belongsTo(User::class, 'owner_user_id');
    }
}
