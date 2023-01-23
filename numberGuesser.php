<?php

$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber() {
  global $play_count, $correct_guesses, $guess_high, $guess_low;
  $play_count++;
  $random_number = rand(1, 10);
  echo "\nMake your guess...\n";
  $guess = readline(">> ");
  $guess = intval($guess);

  echo "\nYou are on round $play_count, the random number was $random_number and you guessed $guess.\n";

  if ($guess === $random_number) {
    $correct_guesses++;
  } elseif ($guess > $random_number) {
    $guess_high++;
  } elseif ($guess < $random_number) {
    $guess_low++;
  }

};
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$percentage_of_guesses = ($correct_guesses/$play_count) * 100;
echo "\nYou were right $percentage_of_guesses% time.";

if ($guess_high > $guess_low) {
  echo "\nWhen you guessed wrong, you tended to guess high.";
} elseif($guess_high < $guess_low) {
  echo "\nWhen you guessed wrong, you tended to guess low.";
} else {
  echo "\nWhen you guessed wrong, you neither tended to guess low nor high.";
};
