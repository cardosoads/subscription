<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $casts = [
        'status'   => ProjectStatus::class,
        'metadata' => 'json',
    ];
}
