<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common\Enum;

use GrizzIt\Enum\Enum;

/**
 * @method static JoinTypeEnum JOIN_INNER()
 * @method static JoinTypeEnum JOIN_LEFT()
 * @method static JoinTypeEnum JOIN_RIGHT()
 * @method static JoinTypeEnum JOIN_FULL()
 */
class JoinTypeEnum extends Enum
{
    /**
     * Defines a inner join for the query.
     *
     * @var string
     */
    public const JOIN_INNER = 'INNER JOIN';

    /**
     * Defines a left join for the query.
     *
     * @var string
     */
    public const JOIN_LEFT  = 'LEFT JOIN';

    /**
     * Defines a right join for the query.
     *
     * @var string
     */
    public const JOIN_RIGHT = 'RIGHT JOIN';

    /**
     * Defines a full join for the query.
     *
     * @var string
     */
    public const JOIN_FULL  = 'FULL OUTER JOIN';
}
