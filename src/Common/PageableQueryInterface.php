<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface PageableQueryInterface extends QueryInterface
{
    /**
     * Defines the limit for the result.
     *
     * @param int $size
     * @param int $page
     *
     * @return void
     */
    public function setPage(int $size, int $page = 1): void;
}
