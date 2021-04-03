<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

use GrizzIt\Dbal\Common\Enum\JoinTypeEnum;

interface JoinableQueryInterface extends QueryInterface
{
    /**
     * Adds a join to the query.
     *
     * @param string $table
     * @param string $leftColumn
     * @param string $rightColumn
     * @param JoinTypeEnum $type
     *
     * @return void
     */
    public function addJoin(
        string $table,
        string $leftColumn,
        string $rightColumn,
        JoinTypeEnum $type
    );

    /**
     * Compiles the limit segment of the query.
     *
     * @return string
     */
    public function getJoin(): string;
}
