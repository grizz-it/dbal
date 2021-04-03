<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

use Traversable;
use Countable;

interface QueryResultInterface extends Traversable, Countable
{
    /**
     * Returns whether the query was a success or not.
     *
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * Retrieves all errors related to the query.
     *
     * @return array
     */
    public function getErrors(): array;

    /**
     * Returns the status code of the query.
     *
     * @return string
     */
    public function getStatusCode(): string;

    /**
     * Retrieves all rows from the result.
     *
     * @return array
     */
    public function fetchAll(): array;
}
