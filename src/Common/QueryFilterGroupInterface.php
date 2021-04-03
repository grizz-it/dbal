<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface QueryFilterGroupInterface
{
    /**
     * Adds a filter to the query.
     *
     * @param QueryFilterInterface $filter
     *
     * @return void
     */
    public function addFilter(QueryFilterInterface $filter): void;

    /**
     * Retrieves the filter group.
     *
     * @return string
     */
    public function getFilterGroup(): string;
}
