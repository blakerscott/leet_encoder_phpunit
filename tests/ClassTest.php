<?php

	require_once 'src/Leet.php';

	class LeetTest extends PHPUnit_Framework_TestCase
	{

		function test_makeLeet()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'beowulf';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('beowulf', $result);
		}
	}

?>
