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

// Create a function that finds the maximum range of a triangle's third edge, where the side lengths are all integers.
function maxtraight($ege1, $ege2, $ege3){
  return ($ege1 + $ege2 )-1;
}
echo maxtraight (20, 30, 15);

// Create a function that takes a list of numbers and returns the second largest number.

$numbers=[1,2,3,4,5,6];

function secondLargestNumber($numbers) {
  // Sort the array in descending order
  rsort($numbers);

  // Return the second element (index 1) of the sorted array
  return $numbers[1];
}

// $numbers = [1, 2, 3, 4, 5, 6];
echo     secondLargestNumber($numbers) ;  // Output: 5

// Your task is to create a Circle constructor that creates a circle with
//  a radius provided by an argument. The circles constructed must have two getters getArea() (PI*r^2) 
// and getPerimeter() (2*PI*r) which give both respective areas and perimeter (circumference).

Please use PHP and our API to output a list of domains that customer #293785 has onto a
page which is viewable via a web browser. The SSH details required should have already
been emailed to you.
This is an open book test so please feel free to use the internet. Good luck.
Demo API:
API Server: https://api.demo.sitehost.co.nz
API Version: 1.0
API Key: d17261d51ff7046b760bd95b4ce781ac
Client ID: 293785
Formats: json or xml
