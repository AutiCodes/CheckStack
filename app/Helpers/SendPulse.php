<?php

namespace App\Helpers;

class SendPulse 
{
    public static function getStatusCode($url)
    {
        return substr(get_headers($url)[0], 9, 3);
    }

    public static function getUptimeStatus($url, $statusCode)
    {
        $resp = substr(get_headers($url)[0], 9, 3);

        if (intval($resp) != intval($statusCode)) {
            return 0;
        }

        return 1;
    }
}