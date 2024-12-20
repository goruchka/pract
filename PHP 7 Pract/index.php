<?php
// index.php

require 'vendor/autoload.php'; // Убедитесь, что путь к autoload.php правильный

use Animal\Dog;
use Animal\Cat;

// Функция для создания животного на основе пользовательского ввода
function Animal($type)
{
    if (strtolower($type) === 'dog') {
        return new Dog();
    } elseif (strtolower($type) === 'cat') {
        return new Cat();
    } else {
        return null; // Возвращаем null для неизвестного животного
    }
}

// Запрос у пользователя типа животного
echo "Введите тип животного (dog или cat): ";
$handle = fopen("php://stdin", "r");
$type = trim(fgets($handle));
$animal = Animal($type);

if ($animal) {
    // Вывод информации о животном
    echo $animal->getInfo() . PHP_EOL;
} else {
    // Сообщение для неизвестного животного
    echo "Неизвестное животное\n";
}
