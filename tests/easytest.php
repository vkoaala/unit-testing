<?php

namespace phpUnitTutorial\Test;

class easytest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
	{
	    $foo = true;
	    $this->assertTrue($foo);
	}
}
