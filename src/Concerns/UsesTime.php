<?php

namespace QuantaQuirk\FlareClient\Concerns;

use QuantaQuirk\FlareClient\Time\SystemTime;
use QuantaQuirk\FlareClient\Time\Time;

trait UsesTime
{
    public static Time $time;

    public static function useTime(Time $time): void
    {
        self::$time = $time;
    }

    public function getCurrentTime(): int
    {
        $time = self::$time ?? new SystemTime();

        return $time->getCurrentTime();
    }
}
