<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

class ConcreteOneXyzFactory extends AbstractXyzFactory
{

    public function createAbc(): AbcInterface
    {
        return new ConcreteOneAbc();
    }

    public function createDef(): DefInterface
    {
        return new ConcreteOneDef();
    }

}