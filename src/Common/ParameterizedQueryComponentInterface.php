<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Dbal\Common;

interface ParameterizedQueryComponentInterface
{
    /**
     * Retrieves an array of parameters.
     *
     * @return array
     */
    public function getParameters(): array;
}
