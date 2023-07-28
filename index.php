<?php
// 1 Add santa to the athlete array
$athleteArray = [];

$santa = [
  "name" => "Santa",
  "age" => "1748",
  "sport" => "delivery",
  "quote" => "I am not paid enough for this"
];

array_push($athleteArray, $santa);
// to see output on the browser
var_dump($athleteArray);

// it only can show on the web server
echo "<pre>";
print_r($athleteArray);
echo "</pre>";


// 1.1 Use a for loop to add a property called win to every element in athleteArray. 
// win should be a function expression with no parameters that console logs: "{name} won the {sport} event!"
for ($i = 0; $i < count($athleteArray); $i++) {
  $athleteArray[$i]['win'] = function () use ($athleteArray, $i) {
    echo "{$athleteArray[$i]['name']} won the {$athleteArray[$i]['sport']} event!";
  };
}

// Now, to call the win function for a specific athlete, you can do the following:
$athleteArray[0]['win'](); // Output: "Santa won the delivery event!"


// 2.1 Complete the unjumble function, which accepts a string as an argument and reverses it,
// then returns the reversed string.
// Use the built-in JavaScript methods for strings and arrays to accomplish this. 
// See the MDN String and Array documentation for all the available methods.

function unjumble($str) {
  return strrev($str);
}
echo "<pre>";
echo unjumble("hello");

//3.1 Create a function called removeOdds that accepts an array of numbers.
// Return an array with only the even numbers.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

function removeOdds($numbers) {
  return array_filter($numbers, function($number) {
    return $number % 2 === 0;
  });
}

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$evenNumbers = removeOdds($numbers);
echo "<pre>";
print_r($evenNumbers);
echo "<pre>";
// echo removeOdds($numbers);

// 4.1 Create a function called newAthlete that takes a name, age, sport,
// and quote and creates a new athlete object from it. Don't forget to include a win attribute.

function newAthlete ($name, $age, $sport, $quote) {
  return ["name"=> $name,
          "age"=> $age,
          "sport"=> $sport,  
          "quote"=> $quote,
           "win"=> false
];
  }
  $athlete = newAthlete('John Doe', 25, 'Basketball', 'I am the greatest!');
print_r($athlete);

