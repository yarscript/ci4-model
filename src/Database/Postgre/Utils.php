<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Yarscript\Ciloquent\Database\Postgre;

use Yarscript\Ciloquent\Database\BaseUtils;
use Yarscript\Ciloquent\Database\Exceptions\DatabaseException;

/**
 * Utils for Postgre
 */
class Utils extends BaseUtils
{
    /**
     * List databases statement
     *
     * @var string
     */
    protected $listDatabases = 'SELECT datname FROM pg_database';

    /**
     * OPTIMIZE TABLE statement
     *
     * @var string
     */
    protected $optimizeTable = 'REINDEX TABLE %s';

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
