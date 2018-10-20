<?php
use PHPUnit\Framework\TestSuite;

class NoAssertTest extends PHPUnit_Framework_TestSuite
{
    function testWithoutAssertions() {
        $x = 5;
    }
}
