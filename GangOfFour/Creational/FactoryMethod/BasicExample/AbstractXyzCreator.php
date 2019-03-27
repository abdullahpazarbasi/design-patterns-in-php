<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
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
        $oConcreteXyz = $this->factoryMethod();
        return $oConcreteXyz->myOperation();
    }

}