<?php

declare(strict_types=1);

/**
 * Copyright Andrea Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace Org_Heigl\CommunityNaming;

class Generator
{
    public static function generate(): string
    {
        $naming = new Naming(new RandomnessGenerator());

        return $naming->getRandomName();
    }
}