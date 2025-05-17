<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\Enums\ProjectStatus;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    use HasUlids;

    protected $casts = [
        'status' => ProjectStatus::class,
    ];
}
