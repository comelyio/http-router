<?php
/**
 * This file is part of Comely package.
 * https://github.com/comelyio/comely
 *
 * Copyright (c) 2016-2018 Furqan A. Siddiqui <hello@furqansiddiqui.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code or visit following link:
 * https://github.com/comelyio/comely/blob/master/LICENSE
 */

declare(strict_types=1);

namespace Comely\IO\HttpRouter\Controller\Data;

/**
 * Class Payload
 * @package Comely\IO\HttpRouter\Controller\Data
 */
class Payload extends AbstractIterableData
{
    /**
     * @param string $key
     * @param $value
     * @return bool
     */
    public function set(string $key, $value): bool
    {
        return $this->setProp($key, $value);
    }

    /**
     * @param string $key
     * @return null|string
     */
    public function get(string $key): ?string
    {
        $prop = $this->getProp($key);
        return $prop->value ?? null;
    }
}