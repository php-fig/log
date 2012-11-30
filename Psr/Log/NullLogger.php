<?php

namespace Psr\Log;

/**
 * This Logger can be used to avoid conditional log calls
 *
 * Logging should always be optional, and if no logger is provided to your
 * library creating a NullLogger instance to have something to throw logs at
 * is a good way to avoid littering your code with `if ($this->logger) { }`
 * blocks.
 */
class NullLogger implements LoggerInterface
{
    /**
     * {@inheritDoc}
     */
    public function emergency($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function alert($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function critical($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function error($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function warning($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function notice($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function info($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function debug($message, array $context = array())
    {
        // noop
    }

    /**
     * {@inheritDoc}
     */
    public function log($level, $message, array $context = array())
    {
        // noop
    }
}
