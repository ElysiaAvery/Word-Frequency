<?php
  class WordFrequency
  {
    function checkWordFrequency($input_sentence, $input_word)
    {
      $counter = 0;
      $lowerSentence = strtolower($input_sentence);
      $lowerWord = strtolower($input_word);
      $removeSentencePunctuation = preg_replace("/[^a-z]+/i", " ", $lowerSentence);
      $removeWordPunctuation = preg_replace("/[^a-z]+/i", " ", $lowerWord);
      $newSentence = explode(" ", $removeSentencePunctuation);
      $arrayLength = count($newSentence);
      for($i = 0; $i < $arrayLength; $i++) {
        if($newSentence[$i] == $removeWordPunctuation) {
          $counter = $counter + 1;
        }
      }
      return $counter;
    }
  }
?>
