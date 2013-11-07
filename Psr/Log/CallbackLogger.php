<?php

namespace Psr\Log;

class CallbackLogger extends AbstractLogger
{
    /**
     * @var callable
     */
    private $callback;

    public function __construct($callback)
    {
        $this->callback = $callback;
    }


    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return null
     */
    public function log($level, $message, array $context = array())
    {
        call_user_func($this->callback, $level, $message, $context);
    }
}
