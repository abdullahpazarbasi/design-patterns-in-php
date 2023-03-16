<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

abstract class AbstractXyzCreator
{

    abstract public function factoryMethod(): XyzInterface;

    final public function doMyOperation(): string
    {
        $xyz = $this->factoryMethod();

        return $xyz->operate();
    }

}