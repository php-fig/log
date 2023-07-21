PSR Log
=======

This repository holds all interfaces/classes/traits related to
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md).

Note that this is not a logger of its own. It is merely an interface that
describes a logger. See the specification for more details.

Installation
------------

```bash
composer require psr/log
```

Usage
-----

If you need a logger, you can use the interface like this:

```php
<?php

declare(strict_types=1);

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

final readonly class Foo
{
    public function __construct(
        private LoggerInterface $logger = new NullLogger()
    ){}

    public function doSomething(): void
    {
        $this->logger->info('Doing work');

        try {
            $this->doSomethingElse();
        } catch (Throwable $e) {
            $this->logger->error('Oh no!', ['exception' => $e]);
        }

        // do something useful
    }
}
```

You can then pick one of the implementations of the interface to get a logger.

If you want to implement the interface, you can require this package and
implement `Psr\Log\LoggerInterface` in your code. Please read the
[specification text](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md)
for details.
