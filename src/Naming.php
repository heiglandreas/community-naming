<?php

declare(strict_types=1);

/**
 * Copyright Andreas Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace Org_Heigl\CommunityNaming;

class Naming
{
    use Attributes;
    use Names;

    private $randomnessGenerator;

    public function __construct(Randomizer $randomnessGenerator)
    {
        $this->randomnessGenerator = $randomnessGenerator;
    }

    public function getRandomName(): string
    {
        return $this->getRandomizedValueFromArray(self::$attributes)
            . '-'
            . $this->getRandomizedValueFromArray(self::$names);
    }

    private function getRandomizedValueFromArray(array $array): string
    {
        $count = count($array);

        return $array[$this->randomnessGenerator->getRandomNumber(0, $count-1)];
    }
}