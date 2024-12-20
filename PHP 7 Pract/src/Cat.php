<?php

namespace Animal;

class Cat extends Animal
{
    protected function makeSound()
    {
        return "Мяу";
    }

    public function getType()
    {
        return "Млекопитающее";
    }
}
