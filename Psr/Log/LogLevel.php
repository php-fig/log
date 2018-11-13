<?php

namespace Psr\Log;

/**
 * Describes log levels.
 */
class LogLevel
{
    const EMERGENCY = 'emergency';
    const ALERT     = 'alert';
    const CRITICAL  = 'critical';
    const ERROR     = 'error';
    const WARNING   = 'warning';
    const NOTICE    = 'notice';
    const INFO      = 'info';
    const DEBUG     = 'debug';
    
    public static $levels = [
        self::EMERGENCY => self::EMERGENCY,
        self::ALERT     => self::ALERT,
        self::CRITICAL  => self::CRITICAL,
        self::ERROR     => self::ERROR,
        self::WARNING   => self::WARNING,
        self::NOTICE    => self::NOTICE,
        self::INFO      => self::INFO,
        self::DEBUG     => self::DEBUG,
    ];
}
