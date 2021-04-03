<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface QueryInterface
{
    /**
     * Builds the query and returns it.
     *
     * @return string
     */
    public function getQuery(): string;
}
