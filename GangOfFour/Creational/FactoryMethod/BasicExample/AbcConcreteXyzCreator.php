<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class AbcConcreteXyzCreator
 */
class AbcConcreteXyzCreator extends AbstractXyzCreator
{

    /**
     * @return XyzInterface
     */
    public function factoryMethod(): XyzInterface
    {
        return new AbcConcreteXyz();
    }

}