<?php

	require_once 'src/Leet.php';

	class LeetTest extends PHPUnit_Framework_TestCase
	{

		function test_printWord()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'a';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('a', $result);
		}

		function test_print_Multiple_Words()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'a yak';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('a yak', $result);
		}


		function test_makeLeet3()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'egg eat';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('3gg 3at', $result);
		}
		//
		//
		function test_makeLeet3_0()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'dog eat';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('d0g 3at', $result);
		}

		function test_makeLeet3_0_Caps()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'dOg Eat';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('d0g 3at', $result);
		}

		function test_makeLeet3_0_Caps_I()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'dog Eat I am i';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('d0g 3at 1 am i', $result);
		}

		function test_makeLeet3_0_Caps_I_S()
		{
		//Arrange
		$test_LeetGenerator = new Leet;
		$input = 'dog Eat I am i sosks';

		//Act
		$result = $test_LeetGenerator->makeLeet($input);

		//Assert
		$this->assertEquals('d0g 3at 1 am i s0zkz', $result);
		}

	}

?>
