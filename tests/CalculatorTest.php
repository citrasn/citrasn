<?php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $this->assertEquals(15, $calculator->add(10, 5));
    }

    public function testSubtraction()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->subtract(10, 5));
    }
}

