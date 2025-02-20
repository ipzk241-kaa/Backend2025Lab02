<?php
function createArray() {
    $length = rand(3, 7); 
    $array = [];
    for ($i = 0; $i < $length; $i++) {
        $array[] = rand(10, 20);
    }
    return $array;
}

function processArrays($array1, $array2) {
    $merged = array_merge($array1, $array2); 
    $unique = array_unique($merged); 
    sort($unique);
    return $unique;
}

$array1 = createArray();
$array2 = createArray();
echo "Масив 1: " . implode(", ", $array1) . "<br>";
echo "Масив 2: " . implode(", ", $array2) . "<br>";

$result = processArrays($array1, $array2);
echo "Результат: " . implode(", ", $result);
?>