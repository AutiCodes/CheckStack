<?php

namespace Modules\Monitor\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Monitor\Models\Monitor;
use Modules\Monitor\Models\Pulse;

class MonitorEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $monitors;

    public function __construct($monitors)
    {
        $this->monitors = $monitors;
    }

    public function handle(): void
    {
        foreach($this->monitors as $monitor) {
            echo "\r\n Executing an email monitor check (one of two)";

            $pulse = Pulse::create([
                'up' => 0,
                'response_time' => 3,
                'email_in_status' => 3,
                'email_out_status' => 3,
                'email_smtp_relay_status' => 3,
                'email_forward_status' => 3,
            ]);

            $pulse->monitor()->attach($monitor->id);
        }
    }
}
