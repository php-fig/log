<?php

namespace Psr\Log;

/**
 * Describes log levels
 */
class LogLevel
{

    const EMERGENCY = 0;
    const ALERT = 1;
    const CRITICAL = 2;
    const ERROR = 3;
    const WARNING = 4;
    const NOTICE = 5;
    const INFO = 6;
    const DEBUG = 7;

    /**
     * Level names
     * @var array
     */
    protected static $names = array(
        0 => "emergency",
        1 => "alert",
        2 => "critical",
        3 => "error",
        4 => "warning",
        5 => "notice",
        6 => "info",
        7 => "debug"
    );

    /**
     * Returns a level name
     * @param int $level
     * @return string|null The level name or null if the level doesn't exist
     */
    public static function getName($level)
    {
        if (isset(static::$names[$level]))
            return static::$names[$level];
        else
            return null;
    }

}
