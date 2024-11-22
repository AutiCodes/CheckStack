<?php

namespace Modules\Monitor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Monitor\Models\Monitor;

// use Modules\Monitor\Database\Factories\PulseFactory;

class Pulse extends Model
{
    use HasFactory;

    protected $table = 'pulse';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'up',
        'response_time',
    ];

    public function monitor(): BelongsToMany
    {
        return $this->BelongsToMany(Monitor::class, 'monitor_pulse');
    }
}
