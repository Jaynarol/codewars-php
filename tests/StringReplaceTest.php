<?php


use App\StringReplace;
use PHPUnit\Framework\TestCase;

class StringReplaceTest extends TestCase{

    public function testThatSomethingShouldHappen(){
        $this->assertEquals(StringReplace::repeatStr(3, "*"), "***");
        $this->assertEquals(StringReplace::repeatStr(2
            , "@"), "@@");
        $this->assertEquals(StringReplace::repeatStr(1, "!"), "!");
    }

}