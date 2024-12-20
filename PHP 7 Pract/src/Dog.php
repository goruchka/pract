<?php

namespace Animal;

class Dog extends Animal
{
    protected function makeSound()
    {
        return "Гав";
    }

    public function getType()
    {
        return "Млекопитающее";
    }
}
