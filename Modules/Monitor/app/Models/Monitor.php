<?php

namespace Modules\Monitor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modules\Monitor\Models\Pulse;

class Monitor extends Model
{
    use HasFactory;

    protected $table = 'monitors';

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

    public function pulses(): BelongsToMany
    {
        return $this->BelongsToMany(Pulse::class)->orderBy('created_at', 'desc');
    }
}
