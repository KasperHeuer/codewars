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
$better = betterThanAverage($classPoints, $yourPoints);
echo "are you better " . $better . "<br> <br>";

// opdracht Removing Elements
function removeEveryOther($array)
{
    $result = [];
    $counter = 0;
    foreach ($array as $value) {
        if ($counter % 2 == 0) {
            $result[] = $value;
        }
        $counter++;
    }

    return $result;
}


$array = ['a' => 'apple', 'b' => 'banana', 'c' => 'cherry', 'd' => 'date', 'e' => 'elderberry'];

print_r(removeEveryOther($array));