<?php

namespace App;

class Person
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->setAge($age);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        if ($age < 0 || $age > 150) {
            throw new \OutOfRangeException("Ошибка. Возраст должен быть в пределах от 0 до 150 лет.");
        }
        $this->age = $age;
    }
}