<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

class ConcreteDefXyzCreator extends AbstractXyzCreator
{

    public function factoryMethod(): XyzInterface
    {
        return new ConcreteDefXyz();
    }

}