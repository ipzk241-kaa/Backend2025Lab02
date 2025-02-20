<?php
function generatePetName($parts) {
    $name = '';
    $length = rand(2, 3); 
    for ($i = 0; $i < $length; $i++) {
        $name .= $parts[array_rand($parts)]; 
    }
    return ucfirst($name); 
}

$parts = ['мур', 'жу', 'жа', 'ба', 'ру', 'акі', 'пух', 'ла', 'пі'];
echo "Згенероване ім'я: " . mb_convert_case(generatePetName($parts), MB_CASE_TITLE,) ."";
?>