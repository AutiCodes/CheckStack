<?php

namespace Modules\Monitor\Livewire;

use Livewire\Component;
use Modules\Monitor\Models\Monitor;

class GetMonitors extends Component
{
    public function render()
    {
        return view('monitor::livewire.get-monitors', [
            'monitors' => Monitor::with('pulses')->get(),
        ]);
    }
}
