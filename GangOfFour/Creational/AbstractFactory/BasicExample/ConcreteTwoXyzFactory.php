<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

class ConcreteTwoXyzFactory extends AbstractXyzFactory
{

    public function createAbc(): AbcInterface
    {
        return new ConcreteTwoAbc();
    }

    public function createDef(): DefInterface
    {
        return new ConcreteTwoDef();
    }

}