<?php
  require_once "src/WordFrequency.php";
  class WordFrequencyTest extends PHPUnit_Framework_TestCase
  {
    function test_checkWordFrequency_lowercase()
    {
      //Arrange
      $test_WordFrequency = new WordFrequency;
      $input_sentence = "She smiled and she laughed.";
      $input_word = "She";

      //Act
      $result = $test_WordFrequency->checkWordFrequency($input_sentence, $input_word);

      //Assert
      $this->assertEquals("she smiled and she laughed." && "she", $result);
    }
    function test_checkWordFrequency_removePunctuation()
    {
      //Arrange
      $test_WordFrequency = new WordFrequency;
      $input_sentence = "She smiled and she laughed.!!!";
      $input_word = "She";

      //Act
      $result = $test_WordFrequency->checkWordFrequency($input_sentence, $input_word);

      //Assert
      $this->assertEquals("she smiled and she laughed" && "she", $result);
    }
    function test_checkWordFrequency_matchWords()
    {
      //Arrange
      $test_WordFrequency = new WordFrequency;
      $input_sentence = "She smiled and she laughed.!!!";
      $input_word = "She";

      //Act
      $result = $test_WordFrequency->checkWordFrequency($input_sentence, $input_word);

      //Assert
      $this->assertEquals("she" ==  "she", $result);
    }
    function test_checkWordFrequency_countWords()
    {
      //Arrange
      $test_WordFrequency = new WordFrequency;
      $input_sentence = "She smiled and she laughed.!!!";
      $input_word = "She";

      //Act
      $result = $test_WordFrequency->checkWordFrequency($input_sentence, $input_word);

      //Assert
      $this->assertEquals(2, $result);
    }
  }
?>
