<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
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