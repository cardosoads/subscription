<?php

declare(strict_types=1);

namespace App\Models\Enums;

use App\Enums\Traits\ValuesToArray;

enum ProductStatus: int
{
    public function label(): string
    {
        return match ($this) {
            self::ACTIVE   => 'Active',
            self::INACTIVE => 'Inactive',
            self::ARCHIVED => 'Archived',
        };
    }

    use ValuesToArray;
    case INACTIVE = 0;
    case ACTIVE   = 1;
    case ARCHIVED = 2;
}
