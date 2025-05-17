<?php

declare(strict_types=1);

namespace App\Models\Enums;

use App\Enums\Traits\ValuesToArray;

enum SubscriptionStatus: int
{
    public function label(): string
    {
        return match ($this) {
            self::ACTIVE   => 'Active',
            self::INACTIVE => 'Inactive',
            self::TRIAL    => 'Trial',
            self::EXPIRED  => 'Expired',
        };
    }

    use ValuesToArray;
    case INACTIVE = 0;
    case ACTIVE   = 1;
    case TRIAL    = 2;
    case EXPIRED  = 3;
}
