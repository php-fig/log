<?php

namespace Psr\Log;

/**
 * Basic Implementation of LoggerAwareTunableInterface.
 */
trait LoggerAwareTunableTrait
{
    use LoggerAwareTrait;

    /**
     * Checks whether a logger instance is already assigned
     *
     * @return bool
     */
    public function hasLogger()
    {
        return $this->logger === null;
    }

    /**
     * Retrieve defined logger
     *
     * @return LoggerInterface|null
     */
    public function getLogger()
    {
        return $this->logger;
    }
}
