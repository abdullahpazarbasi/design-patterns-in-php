<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

class ConcreteAbcXyzCreator extends AbstractXyzCreator
{

    public function factoryMethod(): XyzInterface
    {
        return new ConcreteAbcXyz();
    }

}