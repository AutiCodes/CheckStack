<?php

namespace Modules\Monitor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\BelongsToMany;
use Modules\Monitor\Models\Pulse;

// use Modules\Monitor\Database\Factories\MonitorFactory;

class Monitor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'id',
        'name',
        'type',
        'url',
        'interval',
        'expected_status_code',
        'notification_type',
    ];

    public function pulses(): belongsToMany
    {
        return $this->belongsToMany(Pulse::class);
    }
}
