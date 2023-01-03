<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

abstract class AbstractXyzFactory
{

    abstract public function createAbc(): AbcInterface;
    abstract public function createDef(): DefInterface;

}
