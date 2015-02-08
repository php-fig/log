<?php

namespace Psr\Log;

/**
 * Describes a logger-aware instance
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object
     *
     * @param LoggerInterface|null $logger
     * @return null
     */
    public function setLogger(LoggerInterface $logger = null);
}
