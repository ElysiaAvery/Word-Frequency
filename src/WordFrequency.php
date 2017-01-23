<?php
  class WordFrequency
  {
    function checkWordFrequency($input_sentence, $input_word)
    {
      $counter = 0;
      $punctuation = [",", ".", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "-", "_", "+", "=", "[", "]", "{", "}", ":", ";", "'"];
      $lowerSentence = strtolower($input_sentence);
      $lowerWord = strtolower($input_word);
      $removeSentencePunctuation = str_replace($punctuation, " ", $lowerSentence);
      $removeWordPunctuation = str_replace($punctuation, " ", $lowerWord);
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
