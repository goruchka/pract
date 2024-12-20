<?php

namespace Animal;

class Dog extends Animal
{
    protected function makeSound(): string
    {
        return "Гав";
    }

    public function getType(): string
    {
        return "Млекопитающее";
    }
}
