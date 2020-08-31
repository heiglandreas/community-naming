<?php
/**
 * Copyright Andrea Heigl <andreas@heigl.org>
 *
 * Licenses under the MIT-license. For details see the included file LICENSE.md
 */

namespace Org_Heigl\CommunityNamingTest;

use Org_Heigl\CommunityNaming\Naming;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class NamingTest extends TestCase
{
    public function testThatTheCorrectNameIsReturned(): void
    {
        $randomizer = new FixedRandomnessGenerator(5);
        $naming = new Naming($randomizer);

        Assert::assertSame('angry-michelle', $naming->getRandomName());
    }
}
