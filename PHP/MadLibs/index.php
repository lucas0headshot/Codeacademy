<?php
function generateStory($singularNoun, $verb, $color, $distanceUnit){
  $story = "\nThe ${singularNoun} are lovely, ${color}, and deep. \n But I have promises to keep, \n And ${distanceUnit} to go before I ${verb}, \n And ${distanceUnit} to go before I ${verb}.\n";

  return $story;
}

echo generateStory("dog", "eat", "purple", "Km");
echo generateStory("car", "cook", "vermilion", "M");
echo generateStory("empty void", "speak", "beige", "Cm");