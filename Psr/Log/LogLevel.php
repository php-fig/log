<?php

namespace Psr\Log;

/**
 * Defines RFC 5424 log levels.
 *
 * @see http://tools.ietf.org/html/rfc5424#section-6.2.1
 */
class LogLevel
{
    /**
     * Emergency: system is unusable.
     */
    const EMERGENCY = 0;

    /**
     * Alert: action must be taken immediately.
     */
    const ALERT = 1;

    /**
     * Critical: critical conditions.
     */
    const CRITICAL = 2;

    /**
     * Error: error conditions.
     */
    const ERROR = 3;

    /**
     * Warning: warning conditions.
     */
    const WARNING = 4;

    /**
     * Notice: normal but significant condition.
     */
    const NOTICE = 5;

    /**
     * Informational: informational messages.
     */
    const INFO = 6;

    /**
     * Debug: debug-level messages.
     */
    const DEBUG = 7;
}
