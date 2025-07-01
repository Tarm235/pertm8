<?php
use PhpUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $this->$this->assertEquals(4, $calc->add(2, 2));
    }
}
?>