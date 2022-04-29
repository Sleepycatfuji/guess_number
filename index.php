<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
echo "I will think of a random number between 1 and 10(inclusive).  Do you think you know what it is?.";
function guessNumber()
{
global $play_count, $guess_low, $correct_guesses, $guess_high;

$play_count++;
echo "Round: $play_count";

$rand_num = rand(1, 10);

echo "\nGuess a number: \n";

$user_guess = intval(readline(">>"));

echo "You are on round $play_count \nThe random number is $rand_num \nYou guessed the number is $user_guess.";

if($user_guess === $rand_num){
  $correct_guesses++;
}
if($user_guess > $rand_num){
  $guess_high++;
}
if($user_guess < $rand_num){
  $guess_low++;
}
$percent_right = $correct_guesses / $play_count * 100;
echo "\nAfter $play_count rounds, the number of times you guessed correctly is $percent_right%\n";
if($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess high";
}
elseif($guess_high < $guess_low) echo "When you guess wrong, you tended to guess low";
}

echo guessNumber();
