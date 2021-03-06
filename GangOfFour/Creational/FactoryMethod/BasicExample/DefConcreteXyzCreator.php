<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
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