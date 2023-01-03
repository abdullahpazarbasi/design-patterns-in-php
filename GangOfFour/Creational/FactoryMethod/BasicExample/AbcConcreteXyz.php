<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class AbcConcreteXyz
 */
class AbcConcreteXyz implements XyzInterface
{

    /**
     * @return string
     */
    public function operate()
    {
        return 'AbcConcreteXyz işlemi tamam.';
    }

}