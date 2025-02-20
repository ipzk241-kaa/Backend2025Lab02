<?php
function findDuplicates($array) {
    $counts = array_count_values($array); 
    $duplicates = array_filter($counts, function($count) {
        return $count > 1;
    }); 

    return array_keys($duplicates); 
}

$array = [1, 2, 3, 4, 2, 5, 3, 6];
$duplicates = findDuplicates($array);
echo "Елементи, що повторюються: " . implode(", ", $duplicates);
?>