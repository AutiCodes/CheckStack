<?php

namespace Modules\Monitor\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Modules\Monitor\Models\Monitor;
use Modules\Monitor\Models\Pulse as SendedPulse;
use Modules\Monitor\Enums\NotificationTypeEnum;
use Modules\Notifications\Emails\EmailMonitorNotification;
use Mail;
use Modules\Settings\Models\Setting;
use Illuminate\Support\Facades\Log;

class MonitorHttps implements ShouldQueue
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
            echo "\r\n Executing an HTTP(S) monitor check";
            Log::channel('monitor_pulses')->debug('Executing an HTTP(S) monitor job for domain: ' . $monitor->name ?? 'No name');
            $resp = substr(get_headers($monitor->url)[0], 9, 3);

            if (intval($resp) != intval($monitor->expected_status_code)) {
                $pulse = SendedPulse::create([
                    'up' => 0,
                    'response_time' => 0,
                ]);
            } else {
                $pulse = SendedPulse::create([
                    'up' => 1,
                    'response_time' => 0,
                ]);
            }

            $pulse->monitor()->attach($monitor->id);

            if (intval($resp) != intval($monitor->expected_status_code)) {
                // TODO make event/listener
                switch ($monitor->notification_type) {
                    case (NotificationTypeEnum::EMAIL->value):
                        Mail::to(Setting::where('name', 'notification_email')->first()->value)->send(new EmailMonitorNotification($monitor->name, 0));
                        break;
                    default:
                        pass;
                }
            }
        }
    }
}
