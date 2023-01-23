<?php
  function generateStory($singular_noun, $verb, $color, $distance_unit = "yards") {
    $story = "\nThe {$singular_noun}s are lovely, {$color}, and deep.\n
But I have promises to keep,\n
And {$distance_unit} to go before I {$verb},\n
And {$distance_unit} to go before I {$verb}.\n";
  return $story;
  };
  echo generateStory("cat", "meows", "blue", "kilometres");
  echo generateStory("sofa", "licks", "pink");
  echo generateStory("car", "plays", "purple", "feet");