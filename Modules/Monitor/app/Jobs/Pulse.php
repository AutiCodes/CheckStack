<?php

namespace Modules\Monitor\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Helpers\SendPulse;
use Modules\Monitor\Models\Monitor;
use Modules\Monitor\Models\Pulse as SendedPulse;

class Pulse implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $monitors;
    /**
     * Create a new job instance.
     */
    public function __construct($monitors)
    {
        $this->monitors = $monitors;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $monitors = Monitor::whereIn('id', $this->monitors)->get();

        foreach ($monitors as $monitor) {
            $uptime = SendPulse::getUptimeStatus($monitor->url, $monitor->status_code);

            $pulse = SendedPulse::create([
                'up' => $uptime,
                'response_time' => 0,
            ]);

            $pulse->monitor()->attach($monitor->id);
        }
    }
}
