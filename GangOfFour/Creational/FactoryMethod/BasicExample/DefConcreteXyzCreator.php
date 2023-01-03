<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class DefConcreteXyzCreator
 */
class DefConcreteXyzCreator extends AbstractXyzCreator
{

    /**
     * @return XyzInterface
     */
    public function factoryMethod(): XyzInterface
    {
        return new DefConcreteXyz();
    }

}