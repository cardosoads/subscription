<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /** @use HasFactory<\Database\Factories\SubscriptionFactory> */
    use HasFactory;

    protected $casts = [
        'status'        => ProjectStatus::class,
        'trial_ends_at' => 'datetime',
        'grace_ends_at' => 'datetime',
        'starts_at'     => 'datetime',
        'ends_at'       => 'datetime',
    ];
}
