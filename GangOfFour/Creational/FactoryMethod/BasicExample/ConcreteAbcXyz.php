<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

class ConcreteAbcXyz implements XyzInterface
{

    public function operate(): string
    {
        return 'Abc';
    }

}