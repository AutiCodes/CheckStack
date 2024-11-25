<?php

namespace Modules\Notifications\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailMonitorNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $monitorName;

    public $monitorStatus;

    /**
     * Create a new message instance.
     */
    public function __construct(string $monitorName, int $monitorStatus)
    {
        $this->monitorName = $monitorName;
        $this->monitorStatus = $monitorStatus;
    }

    /**
     * Build the message.
     */
    public function build(): self
    {
        return $this->view('notifications::mail.monitor_down_or_up', [
            'monitor_name' => $this->monitorName,
            'monitor_status' => $this->monitorStatus,
        ]);
    }
}
