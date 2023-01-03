<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class AbstractXyzCreator
 */
abstract class AbstractXyzCreator
{

    /**
     * @return XyzInterface
     */
    abstract public function factoryMethod(): XyzInterface;

    /**
     * @return string
     */
    final public function doMyOperation()
    {
        $xyz = $this->factoryMethod();

        return $xyz->operate();
    }

}