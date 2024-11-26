<?php

namespace Modules\Monitor\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Monitor\Models\Monitor;
use App\Helpers\SendPulse;
use Modules\Settings\Models\Setting;
use Hash;

class MonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('monitor::monitors', [
            'monitors' => Monitor::with('pulses')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('monitor::monitor_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Redirect
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'monitor_type' => ['required', 'int'],
        ]);

        switch ($validated['monitor_type']) {
            case 1:
                $validated = $request->validate([
                    'monitor_type' => ['required', 'int'],
                    'name' => ['required', 'string'],
                    'url' => ['required', 'string'],
                    'interval' => ['required', 'int'],
                    'expected_status_code' => ['required', 'int'],
                    'notification_type' => ['nullable'],
                ]);

                Monitor::create([
                    'name' => $validated['name'],
                    'type' => $validated['monitor_type'],
                    'url' => $validated['url'],
                    'interval' => $validated['interval'],
                    'expected_status_code' => $validated['expected_status_code'],
                    'notification_type' => $validated['notification_type'] ?? 0,
                ]);
                break;
            case 2:
                $validatedEmail = $request->validate([
                    'email_name' => ['required'],
                    'interval' => ['required'],
                    'notification_type' => ['nullable'],
                    'email_internal' => ['required'],
                    'password_internal' => ['required'],
                    'email_external' => ['required'],
                    'password_external' => ['required'],
                    'email_forward' => ['required'],
                    'password_forward' => ['required'],
                ]);

                Monitor::create([
                    'name' => $validatedEmail['email_name'],
                    'type' => 2,
                    'interval' => $validatedEmail['interval'],
                    'notification_type' => $validatedEmail['notification_type'] ?? 0,
                    'email_internal' => $validatedEmail['email_internal'],
                    'password_internal' => Hash::make($validatedEmail['password_internal']),
                    'email_external' => $validatedEmail['email_external'],
                    'password_external' => Hash::make($validatedEmail['password_external']),
                    'email_forward' => $validatedEmail['email_forward'],
                    'password_forward' => Hash::make($validatedEmail['password_forward']),

                ]);
                break;
        }

        return redirect(route('monitor.index'))->with('success', 'Monitor has been added!');
    }

    /**
     * Show the specified resource.
     *
     * @param int $id The id of the monitor to be viewed
     * @return View
     */
    public function show(int $id)
    {
        return view('monitor::monitors');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id The id of the monitor to be viewed
     * @return View
     */
    public function edit(int $id)
    {
        return view('monitor::monitor_edit', [
            'monitor' => Monitor::where('id', $id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id The id of the monitor to be updated
     * @return Redirect
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'monitor_type' => ['required', 'int'],
            'name' => ['required', 'string'],
            'url' => ['required', 'string'],
            'interval' => ['required', 'int'],
            'expected_status_code' => ['required', 'int'],
            'notification_type' => ['nullable'],
        ]);

        $monitor = Monitor::where('id', $id)->first();

        $monitor->update([
            'name' => $validated['name'],
            'type' => $validated['monitor_type'],
            'url' => $validated['url'],
            'interval' => $validated['interval'],
            'expected_status_code' => $validated['expected_status_code'],
            'notification_type' => $validated['notification_type'],
        ]);

        return redirect(route('monitor.index'))->with('success', 'Monitor has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
