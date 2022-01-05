<?php

namespace App\Rules;

use App\Models\UserCampaign;
use Illuminate\Contracts\Validation\Rule;

class CampaignNameUniqueForUser implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !UserCampaign::where('name', $value)->doesntExist();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You already have a campaign with this name';
    }
}
