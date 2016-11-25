<?php

namespace Psr\Log;

/**
 * Describes a logger-aware tunable instance.
 */
interface LoggerAwareTunableInterface extends LoggerAwareInterface
{
    /**
     * Checks whether a logger instance is already assigned
     *
     * @return bool
     */
    public function hasLogger();

    /**
     * Retrieve defined logger
     *
     * @return LoggerInterface|null
     */
    public function getLogger();
}
