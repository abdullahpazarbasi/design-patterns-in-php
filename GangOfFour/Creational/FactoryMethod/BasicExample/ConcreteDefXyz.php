<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

class ConcreteDefXyz implements XyzInterface
{

    public function operate(): string
    {
        return 'Def';
    }

}