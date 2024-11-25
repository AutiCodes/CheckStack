<?php

namespace Modules\Settings\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Settings\Models\Setting;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('settings::index', [
            'settings' => Setting::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('settings::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'notification_email' => ['nullable', 'string'],
        ]);

        try {
            if (array_key_exists('notification_email', $validated)) {
                if (!Setting::where('name', 'notification_email')->first()) {
                    Setting::create([
                        'name' => 'notification_email',
                        'value' => $validated['notification_email'],
                    ]);
                } else {
                    Setting::where('name', 'notification_email')->update([
                        'value' => $validated['notification_email'],
                    ]);
                }

            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Er ging iets mis! ' . $e->getMessage());
        }


        return redirect()->back()->with('success', 'Settings are saved!');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('settings::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('settings::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
