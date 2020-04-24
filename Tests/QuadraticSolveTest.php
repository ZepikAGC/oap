<?php

if (file_exists(__DIR__."/..//vendor/autoload.php")) {
    require __DIR__."/../vendor/autoload.php";
}

use Osipov\QuadraticSolve;
use PHPUnit\Framework\TestCase;
use Osipov\MyException;

class QuadraticSolveTest extends TestCase
{
    protected $quad;

    protected function setUp(): void
    {
        $this->quad=new QuadraticSolve();
    }
    protected function tearDown(): void
    {
        $this->quad=NULL;
    }
    public function testSolve1()
    {
        $this->assertEquals([2,-12],$this->quad->solve(1,10,-24));
    }
    public function testSolve2()
    {
        $this->assertEquals([-1,-2],$this->quad->solve(1,3,2));
    }
    public function testSolve3()
    {
        $this->assertEquals(-0.5,$this->quad->solve(0,2,1));
    }
    public function testSolve4()
    {
        $this->assertEquals(0,$this->quad->solve(2,0,0));
    }
    public function testSolve5()
    {
        $this->expectException(MyException::class);
        $this->quad->solve(0,0,0);
    }
    public function testSolve6()
    {
        $this->expectException(MyException::class);
        $this->quad->solve(6,2,5);
    }
}
