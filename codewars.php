<?php
// opdracht how good are you really?
$classPoints = [
    0,
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    10
];
$yourPoints = 10;
function betterThanAverage($classPoints, $yourPoints,)
{
    $class = array_sum($classPoints) / count($classPoints);
    if ($yourPoints > $class) {
        return true;
    } else {
        return false;
    }
}

echo $better = betterThanAverage($classPoints, $yourPoints);
echo "<br> <br>";
// opdracht Removing Elements
function removeEveryOther($array)
{
    $result = [];
    $counter = 0;
    foreach ($array as $index => $value) {
        if ($counter % 2 == 0) {
            $result[$index] = $value;
        }
        $counter++;
    }
    return $result;
}


print_r(removeEveryOther($array = range(1, 65)));

echo "<br> <br>";
// opdracht Find numbers which are divisible by given number
function divisibleBy($numbers, $divisor)
{
    // Initialize an empty array to store numbers that are divisible by the divisor
    $result = [];

    // Loop through each number in the input array
    foreach ($numbers as $number) {
        // Check if the current number is divisible by the divisor with no remainder
        if ($number % $divisor === 0) {
            // If divisible, add the number to the result array
            $result[] = $number;
        }
    }

    // Return the array of numbers that are divisible by the divisor
    return $result;
}

// opdracht Century From Year
function centuryFromYear($year)
{
    return (int) ceil($year / 100);
}
$year = 1700;

echo $cent = centuryFromYear($year);;
echo "<br><br>";
// opdracht keep hydrated!
function litres(float $t): int
{
    return (int) floor($t * 0.5);
}
$t = 6.7;

echo $amountLiters = litres($t);
echo "<br> <br>";
// opdracht remove first and last character
function remove_char(string $s): string
{
    // Use substr to get a substring of $string, starting from index 1 and ending at the second-to-last character
    return substr($s, 1, -1);
}

$s = "nice";

echo $firstAndLast = remove_char($s);;
echo "<br> <br>";

// opdracht  Reversed strings


function solution(string $str): string
{
    return strrev($str);
}
$str = "abc";


echo $reverseString = solution($str);;

echo "<br><br>";

// opdracht Volume of a Cuboid
function get_volume_of_cuboid($length, $width, $height)
{
    return $length * $width * $height;
}

$length = 10;
$width = 5;
$height = 3;

echo $cuboid = get_volume_of_cuboid($length, $width, $height);;
echo "<br><br>";

// opdracht Opposite number


function opposite(int $n): int
{
    return -$n;
}

$n = 7;
echo $opposite = opposite($n);
echo "<br> <br>";
// opdracht Will there be enough space?
function enough($cap, $on, $wait)
{
    if ($on + $wait <= $cap) {
        return 0;
    } else {
        return $on + $wait - $cap;
    }
}
$cap = 100;
$on = 50;
$wait = 60;
echo $enough = enough($cap, $on, $wait);

echo "<br> <br>";

// opdracht Find the Difference in Age between Oldest and Youngest Family Members 
function differenceInAges($ages)
{

    $youngest = min($ages);  // Find the youngest age
    $oldest = max($ages);     // Find the oldest age
    $difference = $oldest - $youngest;  // Calculate the difference

    return [$youngest, $oldest, $difference];  // Return as an array
}
$ages = [5, 15, 20];

print_r(differenceInAges($ages));
echo "<br> <br>";

// opdracht Sum of positive
function positive_sum($arr)
{
    $sum = 0;  // Initialize sum to 0

    foreach ($arr as $number) {
        if ($number > 0) {  // Check if the number is positive
            $sum += $number;  // Add it to the sum
        }
    }

    return $sum;  // Return the final sum
}
$arr = $arr = [1, -4, 7, 69];
echo positive_sum($arr);
echo "<br> <br>";
// opdracht  Grasshopper - Summation

function summation(int $n): int
{
    return array_sum(range(1, $n));  // Sum of numbers from 1 to n
}

echo summation(8);
echo "<br> <br>";

// opdracht  Sum without highest and lowest number 
function sumArray($array)
{
    if (count($array) <= 2) {
        return 0;  // If the array has 2 or fewer elements, return 0
    }

    $sumArray = array_sum($array);  // Calculate the total sum of the array
    $sumArray -= min($array);       // Subtract the minimum value
    $sumArray -= max($array);       // Subtract the maximum value

    return $sumArray;  // Return the result
}

$array = [5, 10, 15, 20];
echo sumArray($array);  // Output: 25 (sum of 10 + 15)
echo "<br><br>";

// opdracht L1: Bartender, drinks!


function get_drink_by_profession(string $s): string
{
    $s = strtolower($s);  // Convert the input to lowercase for case-insensitive matching

    if ($s === "jabroni") {
        return "Patron Tequila";
    } elseif ($s === "school counselor") {
        return "Anything with Alcohol";
    } elseif ($s === "programmer") {
        return "Hipster Craft Beer";
    } elseif ($s === "bike gang member") {
        return "Moonshine";
    } elseif ($s === "politician") {
        return "Your tax dollars";
    } elseif ($s === "rapper") {
        return "Cristal";
    } else {
        return "Beer";
    }
}

$s = "Cheese";
echo get_drink_by_profession($s);  // Output: Cristal
echo "<br> <br>";

// opdracht Pillars 

function pillars($numberOfPillars, $dist, $width)
{
    if ($numberOfPillars < 1) {
        return 0;
    } elseif ($numberOfPillars == 1) {
        return 0;
    }

    $distInCm = $dist * 100;
    $totalWidth = ($numberOfPillars - 2) * $width;
    $distance = ($numberOfPillars - 1) * $distInCm;

    return $distance + $totalWidth;
}

$numberOfPillars = 11;
$dist = 15;
$width = 30;

echo pillars($numberOfPillars, $dist, $width);
echo "<br> <br>";
// opdracht If you can't sleep, just count sheep!!

function countsheep($num)
{
    if ($num < 0) {
        return ''; // Return an empty string if the number is negative
    }
    $output = ''; // Initialize an output string
    for ($i = 1; $i <= $num; $i++) {
        $output .= "$i sheep <br>"; // Concatenate each sheep count to the output string
    }
    return $output; // Return the final output string
}

$num = 3;
echo countsheep($num); // Output the result
echo "<br><br>";

// opdracht Are the numbers in order?
function in_asc_order($arr)
{
    $n = count($arr);
    if ($n <= 1) {
        return true; // Arrays with 0 or 1 element are considered sorted
    }

    for ($i = 1; $i < $n; $i++) {
        if ($arr[$i - 1] > $arr[$i]) {
            return false; // Found a pair where the left integer exceeds the right
        }
    }
    return true; // All pairs are in ascending order
}

// Example usage:
var_dump(in_asc_order([1, 2, 3, 4, 5])); // Output: true
var_dump(in_asc_order([5, 4, 3, 2, 1])); // Output: false
var_dump(in_asc_order([1]));              // Output: true
var_dump(in_asc_order([]));                // Output: true
echo "<br> <br>";

// opdracht Sort by Last Char
function last($x)
{
    // Split the input string into an array of words, using a space as the delimiter
    $words = explode(" ", $x);

    // Sort the array of words by the last character of each word
    usort($words, function ($a, $b) {
        // Get the last character of each word
        $lastCharA = substr($a, -1);
        $lastCharB = substr($b, -1);

        // If the last characters are the same, maintain the original order
        if ($lastCharA === $lastCharB) {
            return 0;
        }

        // Otherwise, sort based on the alphabetical order of the last characters
        return $lastCharA <=> $lastCharB;
    });

    // Return the sorted array of words
    return $words;
}
echo "<br> <br>";

// opdracht sum of odd numbers
function rowSumOddNumbers($n)
{
    // Calculate the starting number of the nth row
    $start = $n * $n - $n + 1; // This is equivalent to (n^2 - n + 1)
    $sum = 0;

    // Sum up the next `n` odd numbers starting from $start
    for ($i = 0; $i < $n; $i++) {
        $sum += $start + $i * 2; // Odd numbers are incremented by 2
    }

    return $sum;
}

// Example usage:
echo rowSumOddNumbers(1) . "\n"; // Output: 1
echo rowSumOddNumbers(2) . "\n"; // Output: 8
echo rowSumOddNumbers(3) . "\n"; // Output: 27
echo rowSumOddNumbers(4) . "\n"; // Output: 64
echo rowSumOddNumbers(5) . "\n"; // Output: 125
echo "<br> <br>";

// opdracht Ordered Count of Characters
function orderedCount($text)
{
    // If the input string is empty, return an empty array immediately
    if ($text === "") {
        return [];
    }

    // Initialize an empty associative array to store character counts
    $charCounts = [];

    // Loop through each character in the input string
    foreach (str_split($text) as $char) {
        // If the character already exists in the array, increment its count
        if (isset($charCounts[$char])) {
            $charCounts[$char]++;
        } else {
            // If the character does not exist, set its count to 1
            $charCounts[$char] = 1;
        }
    }

    // Initialize an empty array to store the result as a list of tuples
    $result = [];

    // Loop through each character and its count in the associative array
    foreach ($charCounts as $char => $count) {
        // Add each character and its count as a tuple (array) to the result array
        $result[] = [$char, $count];
    }

    // Return the result array with characters and their counts in order of appearance
    return $result;
}
$text = "hallo";
print_r(str_split($text));
echo "<br> <br>";

// opdracht Alternate capitalization
function capitalize($s)
{
    // Initialize two empty strings for each pattern
    $evenCapitalized = "";
    $oddCapitalized = "";

    // Loop through each character in the input string with its index
    foreach (str_split($s) as $index => $letter) {
        // Capitalize letters at even indices for the first pattern
        if ($index % 2 === 0) {
            $evenCapitalized .= strtoupper($letter);
            $oddCapitalized .= strtolower($letter);
        } else {
            // Capitalize letters at odd indices for the second pattern
            $evenCapitalized .= strtolower($letter);
            $oddCapitalized .= strtoupper($letter);
        }
    }

    // Return an array with both patterns
    return [$evenCapitalized, $oddCapitalized];
}

$s = "abcdef";
print_r(capitalize($s));  // Output should be ['AbCdEf', 'aBcDeF']
echo " <br> <br>";

// opdracht  Get the Middle CharacterString ends with?

function aa($str, $ending)
{
    // If $ending is an empty string, return true
    if ($ending === "") {
        return true;
    }

    // If the ending is longer than the string, it cannot match
    if (strlen($ending) > strlen($str)) {
        return false;
    }

    // Extract the substring from the end of $str that matches the length of $ending
    $substring = substr($str, -strlen($ending));

    // Return true if this substring matches $ending, false otherwise
    return $substring === $ending;
}
echo " <br> <br>";

// opdrcht  Get the Middle Character
function getMiddle($text)
{
    // Get the length of the string
    $length = strlen($text);

    // Calculate the middle index
    $middleIndex = $length / 2;

    // If the length is odd, return the middle character
    if ($length % 2 !== 0) {
        return $text[intval($middleIndex)];
    } else {
        // If the length is even, return the middle two characters
        return substr($text, intval($middleIndex) - 1, 2);
    }
}

// Examples
echo getMiddle("test") . "\n";    // returns "es"
echo getMiddle("testing") . "\n";  // returns "t"
echo getMiddle("middle") . "\n";   // returns "dd"
echo getMiddle("A") . "\n";        // returns "A"

echo " <br> <br>";
// opdracht  Tail Swap
function tail_swap(array $a): array
{
    // Split each string into two parts using the colon
    list($firstPart1, $secondPart1) = explode(':', $a[0]);
    list($firstPart2, $secondPart2) = explode(':', $a[1]);

    // Create the new strings with swapped tails
    $newString1 = $firstPart1 . ':' . $secondPart2;
    $newString2 = $firstPart2 . ':' . $secondPart1;

    // Return the modified strings in an array
    return [$newString1, $newString2];
}

// Examples
print_r(tail_swap(["abc:def", "ghi:jkl"]));  // returns ["abc:jkl", "ghi:def"]
print_r(tail_swap(["123:456", "789:012"]));  // returns ["123:012", "789:456"]

// opdracht geese
function gooseFilter($birds)
{
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    return array_values(array_filter($birds, function ($bird) use ($geese) {
        return !in_array($bird, $geese);
    }));
}
