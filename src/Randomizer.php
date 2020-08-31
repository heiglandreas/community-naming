<?php
/**
 * Copyright Andreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace Org_Heigl\CommunityNaming;

interface Randomizer
{
    public function getRandomNumber(int $min, int $max): int;
}