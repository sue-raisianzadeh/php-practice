<?php
echo "<p>hi where are you</p>";
?>
<!-- /// -->

<?php
// Create an empty object
$adam = new stdClass();

// You can also add properties to the object later if needed
$adam->name = "Adam";
$adam->age = 30;

// Accessing the properties
echo $adam->name . "<br>"; // Output: Adam
echo $adam->age;         // Output: 30
?>

<!-- /// -->
<?php

$person = new stdClass();
$person->name = "John";
$person->age = 30;
$person->city = "New York";

foreach ($person as $key => $value) {
    echo "$key: $value\<br>";
}
?>

<!-- /// -->
<?php
function fizzbuzz($numberParameter) {
   if ($numberParameter % 15 === 0) return "FizzBuzz";
   if ($numberParameter % 6 === 0) return "Buzz";
   if ($numberParameter % 2 ===0) return "Fizz";
   if ($numberParameter % 5 === 0 && $numberParameter % 2 === 0)return "BuzzBuzz";
   return $numberParameter;
  }
  echo fizzbuzz(130);
  ?>
<!-- /// -->
<?php
$students = ['Joseph', 'Susan', 'Wiremu', 'Elizabeth'];
$scores = [
    [80, 70, 70, 100], // Joseph's score
    [85, 80, 90, 90], // Susan's score
    [75, 70, 80, 75], // Wiremu's score
    [100, 90, 95, 85], // Elizabeth's score
];
$gradebook = array();
foreach ($students as $index => $student) {
    $gradebook[$student] = array('testScores' => ($scores[$index]));
}

// Add scores of old students in the previous array
$oldStudentScores = array(
    "Sue" => array(90, 85),
    "Susan" => array(40, 44,56),
    "joe" => array(20, 39,22, 45),
    "jack" => array(10, 99,62, 85)

);

foreach ($oldStudentScores as $studentName => $scores) {
    if (isset($gradebook[$studentName]['testScores'])) {
        $gradebook[$studentName]['testScores'] = array_merge($gradebook[$studentName]['testScores'], $scores);
    } else {
        $gradebook[$studentName]['testScores'] = $scores;
    }
}
function getAverage($name) {
  global $gradebook;
  $testScores = $gradebook[$name]['testScores'];
  $average = array_sum($testScores) / count($testScores);
  return $average;
}

 echo "<pre>";
echo "scores<br>(";
foreach ($gradebook as $name => $data) {
    echo "    [$name] => scores<br>        (<br>";
    foreach (array_keys($data['testScores']) as $key) {
      echo "            [$key] {$data['testScores'][$key]}<br>";
    }
    echo "        )<br>";
    echo "        Average: " . getAverage($name) . "<br><br>";
}
echo ")";
 echo "</pre>";

// $output = print_r($gradebook, true);

// $output = preg_replace('/Array/', 'scores', $output);
// print_r($output);
// echo " Average: " . getAverage($name) . "<br>";

?>

<!-- // 5. Complete the average function that returns the average of a given array of numbers. //-->
 
<?php
function average($array){
$sum= array_sum($array);
$count = count($array);
return ($count !== 0) ? $sum / $count :NAN;
}

//example usage:
$numbers =[1, 2, 3, 4, 5];
echo "The average is: " .average($numbers);


?>

<!-- // -->

<!-- This function takes a sentence, which is a string. 
// It needs to .map() over every word in that sentence and Capitalize The First Letter Of Every Word.
// The function shouldgit add return the modified sentence as a string. -->

<?php
function capitalize($string) {
    return implode(' ', array_map('ucfirst', explode(' ', $string)));
}

echo capitalize("hi how are you") ."<br>";

// This function takes an array of individual strings 
// and then will need to .join() them together to return one string.

$array = ['apple', 'banana', 'cherry'];

function concatMyArray($arrayOfStrings) {
    return implode("", $arrayOfStrings);
}

// Call the function with the $array variable
echo concatMyArray($array)."<br>";
?>
<!-- // This function takes a string. 
// You will need to split the string into individual words before you filter out all those annoying buzzing sounds! 
// It might be helpful to look at the tests in the deBee.test.js file or use console.log inside of the function. -->
<?php
function deBee($sentence) {
  return implode(" ", array_filter(explode(" ", $sentence), function($word) {
    return strtolower($word) !== "buzz";
  }));
}
$sentence = "I'm buzzing with excitement for the weekend!";
echo deBee($sentence) ."<br>"; // Output: "I'm with excitement for the weekend!"
?>

<!-- // This function takes an array of objects. 
// Use the .find() method and return the first object that “Scooby” is hiding within. 
// Look at the tests in the whereAreYou.test.js file or use console.log inside of the function to determine the structure of objects in the array. -->

<?php
function whereAreYou($arrayOfObjects) {
  // Find the first object that “Scooby” is hiding within.
  foreach ($arrayOfObjects as $object) {
      if ($object->hiding === "Scooby") {
          return $object;
      }
  }
  return null; // If "Scooby" is not found, return null.
}

$objects = [
  (object)["hiding" => "Scooby"],
  (object)["hiding" => "Shaggy"],
  (object)["hiding" => "Velma"]
];

$result = whereAreYou($objects);

if ($result) {
  echo "<pre>";
  print_r($result);
  echo "</pre>";
} else {
  echo "Scooby is not hiding in any object.";
}

?>

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
  $athleteArray[$i]->win = function () use ($athleteArray, $i) {
    echo "{$athleteArray[$i]->name} won the {$athleteArray[$i]->sport} event!";
  };
}

// Now, to call the win function for a specific athlete, you can do the following:
$athleteArray[0]->win(); // Output: "Santa won the delivery event!"



