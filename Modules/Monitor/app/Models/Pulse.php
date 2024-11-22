<?php

namespace Modules\Monitor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\BelongsTo;
use Modules\Monitor\Models\Monitor;
// use Modules\Monitor\Database\Factories\PulseFactory;

class Pulse extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'monitor_id',
        'pulse_id',
    ];

    public function monitor(): belongsTo
    {
        return $this->belongsTo(Monitor::class);
    }
    // protected static function newFactory(): PulseFactory
    // {
    //     // return PulseFactory::new();
    // }
}
