<?php

namespace Animal;

class Cat extends Animal
{
    protected function makeSound(): string
    {
        return "Мяу";
    }

    public function getType(): string
    {
        return "Млекопитающее";
    }
}
