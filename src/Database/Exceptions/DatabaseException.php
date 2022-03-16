<?php

/**
 * This file is part of Ciluquent component package.
 *
 *
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Yarscript\Ciloquent\Database\Exceptions;

use Error;

class DatabaseException extends Error implements ExceptionInterface
{
    /**
     * Exit status code
     *
     * @var int
     */
    protected $code = 8;
}
