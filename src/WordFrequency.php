<?php
  class WordFrequency
  {
    function checkWordFrequency($input_sentence, $input_word)
    {
      $lowerSentence = strtolower($input_sentence);
      $lowerWord = strtolower($input_word);
      $removeSentencePunctuation = preg_replace("/[^a-z]+/i", " ", $lowerSentence);
      $removeWordPunctuation = preg_replace("/[^a-z]+/i", " ", $lowerWord);
      return $removeSentencePunctuation && $removeWordPunctuation;
    }
  }
?>
