<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Enums\ProductAddonStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAddon extends Model
{
    /** @use HasFactory<\Database\Factories\ProductAddonFactory> */
    use HasFactory;

    protected $casts = [
        'status'   => ProductAddonStatus::class,
        'metadata' => 'json',
    ];
}
