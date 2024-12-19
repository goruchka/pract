<?php

require __DIR__ . '/vendor/autoload.php';

use App\Person;

function getUserInput(string $prompt): string
{
    echo $prompt;
    return trim(fgets(STDIN));
}

try {
    $name = getUserInput("Введите имя: ");
    $age = (int) getUserInput("Введите возраст: ");

    $person = new Person($name, $age);
    echo "Имя: " . $person->getName() . ", Возраст: " . $person->getAge() . "\n";

} catch (\OutOfRangeException $e) {
    echo "Ошибка: " . $e->getMessage() . "\n";
}