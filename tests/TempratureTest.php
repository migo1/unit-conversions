<?php

namespace Migo\UnitConversions\Tests;

use Migo\UnitConversions\Temprature;
use PHPUnit\Framework\TestCase;

class TempratureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celcius_to_fahrenheit()
    {
        $fahrenheit = Temprature::fromCelcius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}
