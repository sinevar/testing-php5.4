<?php

class FirstTest extends PHPUnit_Framework_TestCase
{
    public function testEmpty()
    {
        $stack = array();
        $this->assertEmpty($stack);
    }

    public function testTraits()
    {
        $this->assertEquals('red',(new Vehicle)->getColor());
        $this->assertEquals('green', (new Vehicle)->shipGetColor());
    }

    public function testMethods()
    {
        $this->assertEquals('VehicleToString', new Vehicle());
    }
}
