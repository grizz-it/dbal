<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface ConnectionFactoryInterface
{
    /**
     * Creates an instance of a connection
     *
     * @param string      $dsn
     * @param string      $username
     * @param string|null $password
     * @param array|null  $options
     * @param array|null  $attributes
     *
     * @return ConnectionInterface
     */
    public function create(
        string $dsn,
        string $username,
        string $password = null,
        array $options = null,
        array $attributes = null
    ): ConnectionInterface;
}
