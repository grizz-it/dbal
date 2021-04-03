<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface ConnectionInterface
{
    /**
     * Begins a transaction.
     *
     * @return void
     */
    public function startTransaction(): void;

    /**
     * Commits a transaction.
     *
     * @return void
     */
    public function commit(): void;

    /**
     * Rolls a transaction back.
     *
     * @return void
     */
    public function rollback(): void;

    /**
     * Returns the ID of the last insert row.
     *
     * @return string
     */
    public function lastInsertId(): string;

    /**
     * Executes a query.
     *
     * @param QueryInterface $query
     *
     * @return QueryResultInterface
     */
    public function query(QueryInterface $query): QueryResultInterface;
}
