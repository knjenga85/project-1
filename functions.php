<?php // PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes[] = [
"quote" => "Change the world by being yourself",
"source" => "Amy Poehler"
];

$quotes[] = [
"quote" => "Every moment is a fresh beginning",
"source" => "TS Eliot"
];

$quotes[] = [
"quote" => "Never regret anything that made you smile",
"source" => "Mark Twain"
];

$quotes[] = [
"quote" => "Everything you can imagine is real",
"source" => "Pablo Picasso"
];

$quotes[] = [
"quote" => "Simplicity is the ultimate sophistication",
"source" => "Leonardo da Vinci"
];

$quotes[] = [
"quote" => "Tough times never last but tough people do",
"source" => "Robert H Schiuller"
];


);



// Create the getRandomQuuote function and name it getRandomQuote

  function getRandomQuote(){

  return $quotes[rand(0, 5)]; // Calls random number



}


// Create the printQuote funtion and name it printQuote
Function printquote() {

  $randomQuote = getRandomQuote($quotes);

 $quote = getRandomQuote($quotes);
   $str = '';
   $string .= "<p class='quote'>" . $quote["quote"] . "</p>";
   $string .= "<p class='source'>" . $quote["source"];
   echo $string
}


?>
