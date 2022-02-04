<?php

use PHPUnit\Framework\TestCase;
use jagarsoft\TestRepo\FirstClass;

class FirstTest extends TestCase
{
	
	/**
	* @covers jagarsoft\TestRepo\FirstClass::__construct
	* @covers jagarsoft\TestRepo\FirstClass::testMethod
	* @link https://github.com/sebastianbergmann/phpunit-documentation/issues/171#issuecomment-67239415
	*/
	function test_can_make_FirstClass_class(){
		try {
		  $fc = new FirstClass(null);
		  $fc->testMethod();
		} catch (\Exception $notExpected) {
		  $this->fail();
		}

		$this->assertTrue(TRUE);
	}
}
