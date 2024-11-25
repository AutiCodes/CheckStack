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
use Modules\Monitor\Enums\NotificationTypeEnum;
use Modules\Notifications\Emails\EmailMonitorNotification;
use Mail;
use Modules\Settings\Models\Setting;

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
            $resp = substr(get_headers($monitor->url)[0], 9, 3);

            if (intval($resp) != intval($monitor->expected_status_code)) {
                $uptime = 0;
            } else {
                $uptime = 1;
            }

            $pulse = SendedPulse::create([
                'up' => $uptime,
                'response_time' => 0,
            ]);

            $pulse->monitor()->attach($monitor->id);

            if ($uptime == 1) {
                return;
            }

            switch ($monitor->notification_type) {
                case (NotificationTypeEnum::EMAIL->value):
                    Mail::to(Setting::where('name', 'notification_email')->first()->value)->send(new EmailMonitorNotification($monitor->name, $uptime));
                    break;
                default:
                    pass;
            }
        }
    }
}
