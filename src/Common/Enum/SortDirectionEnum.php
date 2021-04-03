<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common\Enum;

use GrizzIt\Enum\Enum;

/**
 * @method static SortDirectionEnum DIRECTION_ASC()
 * @method static SortDirectionEnum DIRECTION_DESC()
 */
class SortDirectionEnum extends Enum
{
    /**
     * Defines the ascending direction for a sorter.
     *
     * @var string
     */
    public const DIRECTION_ASC = 'ASC';

    /**
     * Defines the descending direction for a sorter.
     *
     * @var string
     */
    public const DIRECTION_DESC = 'DESC';
}
