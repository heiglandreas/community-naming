<?php

declare(strict_types=1);

/**
 * Copyright Andreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace Org_Heigl\CommunityNamingTest;

class FixedRandomnessGenerator implements \Org_Heigl\CommunityNaming\Randomizer
{
    private $randomness;

    public function __construct(int $randomness)
    {
        $this->randomness = $randomness;
    }

    public function getRandomNumber(int $min, int $max) : int
    {
        return $this->randomness;
    }
}