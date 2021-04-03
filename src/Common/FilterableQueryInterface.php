<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface FilterableQueryInterface extends QueryInterface
{
    /**
     * Adds a filter group to the query.
     *
     * @param QueryFilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(
        QueryFilterGroupInterface $filterGroup
    ): void;
}
