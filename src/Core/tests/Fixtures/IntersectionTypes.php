<?php

/**
 * This file is part of Spiral Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Spiral\Tests\Core\Fixtures;

use Countable;
use IteratorAggregate;

class IntersectionTypes
{
    public static function example(Countable&IteratorAggregate $example)
    {
    }
}
