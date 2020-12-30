<?php

namespace Migo\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Migo\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::formKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
