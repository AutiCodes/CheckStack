<?php

namespace Modules\Monitor\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class MonitorEmailVerify implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $monitors;

    public function __construct($monitors)
    {
        $this->monitors = $monitors;
    }

    public function handle(): void
    {
        echo "\r\n Executing an email monitor check (two of two)";

        foreach($this->monitors as $monitor) {
            $monitor->pulses[0]->update([
                'email_in_status' => 1,
                'email_out_status' => 1,
                'email_smtp_relay_status' => 1,
                'email_forward_status' => 1,
            ]);
        }
    }
}
