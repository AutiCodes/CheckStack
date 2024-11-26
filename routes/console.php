<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Modules\Monitor\Models\Monitor;
use Modules\Monitor\Jobs\MonitorHttps;
use Modules\Monitor\Jobs\MonitorEmail;
use Modules\Monitor\Jobs\MonitorEmailVerify;
use Illuminate\Support\Facades\Log;

/**
 * Runs every minute
 *
 * Get the monitors per type that needs to run every minute
 * And dispatches the apropiate job
 */
Schedule::call(function () {
    try {
        MonitorHttps::dispatch(Monitor::where('interval', '=', 1)->where('type', 1)->get());
        MonitorEmail::dispatch(Monitor::where('interval', '=', 1)->where('type', 2)->get()); // Sending the emails out
        MonitorEmailVerify::dispatch(Monitor::with('pulses')->where('interval', '=', 1)->where('type', 2)->get())->delay(now()->addSeconds(30)); // Checks if emails are delivered
    } catch (Exception $e) {
        Log::warning($e);
        $this->info($e->getMessage());
    }
})->everyMinute();