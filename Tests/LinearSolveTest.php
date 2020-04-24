<?php

if (file_exists(__DIR__."/..//vendor/autoload.php")) {
    require __DIR__."/../vendor/autoload.php";
}

use Osipov\LinearSolve;
use PHPUnit\Framework\TestCase;
use Osipov\MyException;

class LinearSolveTest extends TestCase
{
    protected $linear;

    protected function setUp(): void
    {
        $this->linear=new LinearSolve();
    }
    protected function tearDown(): void
    {
        $this->linear=NULL;
    }
    public function testSolvel1()
    {
        $this->assertEquals(-0.5,$this->linear->solvel(2,1));
    }
    public function testSolvel2()
    {
        $this->assertEquals(-0.6,$this->linear->solvel(5,3));
    }
    public function testSolvel3()
    {
        $this->assertEquals(0,$this->linear->solvel(5,0));
    }
    public function testSolvel4()
    {
        $this->expectException(MyException::class);
        $this->linear->solvel(0,0);
    }
    public function testSolvel5()
    {
        $this->expectException(MyException::class);
        $this->linear->solvel(0,123);
    }
}
