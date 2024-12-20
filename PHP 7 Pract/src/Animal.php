<?php

namespace Animal;

abstract class Animal
{
    abstract protected function makeSound(): string;

    public function getType(): string
    {
        return "Неизвестный тип";
    }

    public function getInfo(): string
    {
        return "Тип: " . $this->getType() . ", Звук: " . $this->makeSound();
    }
}
