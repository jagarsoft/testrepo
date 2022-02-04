<?php

use PHPUnit\Framework\TestCase;
use jagarsoft\TestRepo\FirstClass;

class FirstTest extends TestCase
{
	
	/**
	* @covers
	* @link https://github.com/sebastianbergmann/phpunit-documentation/issues/171#issuecomment-67239415
	*/
	function test_can_make_FirstClass_class(){
		try {
		  $fc = new FirstClass();
		} catch (\Exception $notExpected) {
		  $this->fail();
		}

		$this->assertTrue(TRUE);
	}
}