<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Yarscript\Ciloquent;

/**
 * Model Exceptions.
 */
class ModelException extends BaseException
{
    public static function forNoPrimaryKey(string $modelName): ModelException
    {
        return new static(lang('Database.noPrimaryKey', [$modelName]));
    }

    public static function forNoDateFormat(string $modelName): ModelException
    {
        return new static(lang('Database.noDateFormat', [$modelName]));
    }
}
