<?php

namespace App\Enums;

enum LinkStatus: string
{
    case ACTIVE = 'Active'; // Link is currently attached to an active campaign and can be hit
    case INACTIVE = 'Inactive'; // Link is currently not being used for any live campaigns, so cannot be hit
    case DISABLED = 'Disabled'; // Link is currently attached to a paused live campaign

    public static function toArray()
    {
        return array_combine(array_column(self::cases(), 'name'), array_column(self::cases(), 'value'));
    }

    public static function values()
    {
        return array_column(self::cases(), 'value');
    }
}
