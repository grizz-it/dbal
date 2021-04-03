<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface QueryFilterInterface
{
    /**
     * Retrieves the filter.
     *
     * @return string
     */
    public function getFilter(): string;
}
