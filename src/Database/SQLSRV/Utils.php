<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Yarscript\Ciloquent\Database\SQLSRV;

use Yarscript\Ciloquent\Database\BaseUtils;
use Yarscript\Ciloquent\Database\ConnectionInterface;
use Yarscript\Ciloquent\Database\Exceptions\DatabaseException;

/**
 * Utils for SQLSRV
 */
class Utils extends BaseUtils
{
    /**
     * List databases statement
     *
     * @var string
     */
    protected $listDatabases = 'EXEC sp_helpdb'; // Can also be: EXEC sp_databases

    /**
     * OPTIMIZE TABLE statement
     *
     * @var string
     */
    protected $optimizeTable = 'ALTER INDEX all ON %s REORGANIZE';

    public function __construct(ConnectionInterface &$db)
    {
        parent::__construct($db);

        $this->optimizeTable = 'ALTER INDEX all ON  ' . $this->db->schema . '.%s REORGANIZE';
    }

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
