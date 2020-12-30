<?php

namespace Migo\UnitConversions\Tests;

use Migo\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::formKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
