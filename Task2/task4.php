<?php
// Функція для сортування масиву
function sortUsers($users, $by = 'name') {
    if ($by === 'age') {
        asort($users);
    } else {
        ksort($users);
    }
    return $users;
}

$users = [
    'Іван' => 25,
    'Олена' => 30,
    'Петро' => 20,
    'Анна' => 28
];

echo "Сортування за іменем:<br>";
$sortedByName = sortUsers($users, 'name');
print_r($sortedByName);

echo "<br>Сортування за віком:<br>";
$sortedByAge = sortUsers($users, 'age');
print_r($sortedByAge);
?>