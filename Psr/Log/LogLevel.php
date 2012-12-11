<?php

namespace Psr\Log;

/**
 * Describes log levels
 */
class LogLevel
{
    const EMERGENCY = 'emergency';
    const ALERT = 'alert';
    const CRITICAL = 'critical';
    const ERROR = 'error';
    const WARNING = 'warning';
    const NOTICE = 'notice';
    const INFO = 'info';
    const DEBUG = 'debug';

    /**
     * A map of severities for individual log-levels.
     * 
     * A higher value means a log-level is more severe than another.
     * 
     * @var integer[]
     */
    private static $severities = array(
        self::EMERGENCY => 800,
        self::ALERT => 700,
        self::CRITICAL => 600,
        self::ERROR => 500,
        self::WARNING => 400,
        self::NOTICE => 300,
        self::INFO => 200,
        self::DEBUG => 100,
    );
    
    /**
     * Registers a custom log-level.
     * 
     * @param string $name the name of the log-level
     * @param integer $severity the severity of the log-level; a higher value means more severe
     */
    public static function register($name, $severity)
    {
        $ref = new ReflectionClass(__CLASS__);
        foreach ($ref->getConstants() as $constName => $value) {
            if ($value === $name) {
                throw new \InvalidArgumentException(sprintf('The built-in log-level "%s" cannot be re-defined.', $name));
            }
        }
        
        self::$severities[$name] = $severity;
    }
    
    /**
     * Returns the severity of a log-level.
     * 
     * @throws \InvalidArgumentException if the log-level does not exist.
     * @return integer
     */
    public static function getSeverity($name)
    {
        if ( ! isset(self::$severities[$name])) {
            throw new \InvalidArgumentException(sprintf('The log-level "%s" does not exist.', $name));
        }
        
        return self::$severities[$name];
    }

    /**
     * Compares the severities of the passed levels.
     * 
     * Return Values:
     * - integer(-1) if $aLevel is less severe than $bLevel
     * - integer(0) if $aLevel and $bLevel are equally severe
     * - integer(1) if $aLevel is more severe than $bLevel
     * 
     * @return integer
     */
    public static function compareSeverities($aLevel, $bLevel)
    {
        $aSeverity = self::getSeverity($aLevel);
        $bSeverity = self::getSeverity($bLevel);
        
        if ($aSeverity === $bSeverity) {
            return 0;
        }
        
        return $aSeverity > $bSeverity ? 1 : -1;
    }
}
