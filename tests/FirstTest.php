<?php

use PHPUnit\Framework\TestCase;
use jagarsoft\TestRepo\FirstClass;

class FirstTest extends TestCase {
	
	/**
	* @link https://github.com/sebastianbergmann/phpunit-documentation/issues/171#issuecomment-67239415
	*/
	function test_can_make_FirstMachine_class(){
		try {
		  $sm = new FirstClass();
		} catch (\Exception $notExpected) {
		  $this->fail();
		}

		$this->assertTrue(TRUE);
	}
}