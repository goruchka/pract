<?php

namespace Animal;

abstract class Animal
{
    abstract protected function makeSound();

    public function getType()
    {
        return "Неизвестный тип";
    }

    public function getInfo()
    {
        return "Тип: " . $this->getType() . ", Звук: " . $this->makeSound();
    }
}
