<?php

namespace Psr\Log;

/**
 * This exception is thrown by the log method when called with a level not
 * defined by this specification.
 *
 * @see LoggerInterface::log()
 */
class InvalidArgumentException extends \InvalidArgumentException
{
}
