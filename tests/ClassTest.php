<?php

	require_once 'src/Leet.php';

	class LeetTest extends PHPUnit_Framework_TestCase
	{

		function test_printWord()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'beowulf';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('beowulf', $result);
		}

		function test_makeLeet3()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'beowolf eats eggs';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('b3owolf 3ats 3ggs', $result);
		}



	}

?>
