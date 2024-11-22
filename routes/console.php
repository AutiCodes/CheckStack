<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Modules\Monitor\Models\Monitor;
use Modules\Monitor\Jobs\Pulse;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

/**
 * Runs every minute
 */
Schedule::call(function () {
    try {
        // Get monitor that need to run every minute
        $monitors = Monitor::where('interval', '=', 1)->get();

        $monitorIds = array();
        foreach($monitors as $monitor) {
            array_push($monitorIds, $monitor->id);
        }
        Pulse::dispatch($monitorIds);
    } catch (Exception $e) {
        echo ($e);
    }

})->everyMinute();