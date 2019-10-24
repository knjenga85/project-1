<?php // PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
$quotes = array(


[quote => 'Change the world by being yourself']
[source => 'Amy Poehler']
,
[quote => 'Every moment is a fresh beginning']
[source => 'TS Eliot']
,
[quote => 'Never regret anything that made you smile']
[source => 'Mark Twain']
,
[quote => 'Everything you can imagine is real']
[source => 'Pablo Picasso']
,
[quote => 'Simplicity is the ultimate sophistication']
source => 'Leonardo da Vinci']
,
[quote => 'Tough times never last but tough people do']
[source => 'Robert H Schiuller']


);



// Create the getRandomQuuote function and name it getRandomQuote

function getRandomQuote(array){

  var quoteIndex = Math.floor(Math.random() * quotes.length);

  for (var i = 0; i < array.length; i++) {

    var randomQuote = array[quoteIndex];

  }
  return randomQuote;
}

var result = getRandomQuote(quotes);

// Create the printQuote funtion and name it printQuote
Function printquote() {
    var result = getRandomQuote(); // Calls and stores the getRandomQuote in a variable
    var message = "<p class='quote'>" + quotes.quote + "</p>" +"<p class='source'>" + quotes.source + "</p>";
    document.getElementById('quote-box').innerHTML = message;
}
console.log(results)

?>
