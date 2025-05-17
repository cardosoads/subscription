<?php

declare(strict_types=1);

namespace App\Enums\Traits;

trait ValuesToArray
{
    public static function values()
    {
        return collect(self::cases())
            ->map(fn (self $value) => $value->value)
            ->toArray();
    }
}
