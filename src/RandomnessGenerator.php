<?php

declare(strict_types=1);

/**
 * Copyright Andrea Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace Org_Heigl\CommunityNaming;

use function random_int;

class RandomnessGenerator implements Randomizer
{
    public function getRandomNumber(int $min, int $max) : int
    {
        return random_int($min, $max);
    }
}