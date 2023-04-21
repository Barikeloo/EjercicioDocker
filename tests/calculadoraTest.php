<?php
use PHPUnit\Framework\TestCase;
include 'calculadora.php';
final class calculadoraTest extends TestCase
{
    public function testSuma()
    {
        $calc = new calculadora(3,4);
        $this->assertEquals(8, $calc->suma());
    }

    public function testResta() {
        $calc = new calculadora(3,4);
        $this->assertEquals(1, $calc->resta());
    }

    public function testMultiplicacion() {
        $calc = new calculadora(3,4);
        $this->assertEquals(12, $calc->multiplicacion());
    }
}
?>