<?php

namespace NunoMaduro\SkeletonPhp;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CronManagerModel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'command_name',
        'description',
        'schedule',
        'start_time',
        'end_time',
        'duration_seconds',
        'status',
    ];
}
