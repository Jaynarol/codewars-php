<?php

use App\BouncingBall;
use PHPUnit\Framework\TestCase;

class BouncingBallTest extends TestCase{

    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics() {
        $this->revTest(BouncingBall::bouncingBall(3.0, 0.66, 1.5) , 3);
        $this->revTest(BouncingBall::bouncingBall(30.0, 0.66, 1.5), 15);
        $this->revTest(BouncingBall::bouncingBall(10, 0.6, 10), -1);
    }
}