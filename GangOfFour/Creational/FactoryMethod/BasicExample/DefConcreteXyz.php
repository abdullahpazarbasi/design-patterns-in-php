<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class DefConcreteXyz
 */
class DefConcreteXyz implements XyzInterface
{

    /**
     * @return string
     */
    public function operate()
    {
        return 'DefConcreteXyz işlemi tamam.';
    }

}