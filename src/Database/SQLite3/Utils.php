<?php

/**
 * This file is part of Ciluquent component package.
 *
 *
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Yarscript\Ciloquent\Database\SQLite3;

use Yarscript\Ciloquent\Database\BaseUtils;
use Yarscript\Ciloquent\Database\Exceptions\DatabaseException;

/**
 * Utils for SQLite3
 */
class Utils extends BaseUtils
{
    /**
     * OPTIMIZE TABLE statement
     *
     * @var string
     */
    protected $optimizeTable = 'REINDEX %s';

    /**
     * Platform dependent version of the backup function.
     *
     * @return mixed
     */
    public function _backup(?array $prefs = null)
    {
        throw new DatabaseException('Unsupported feature of the database platform you are using.');
    }
}
