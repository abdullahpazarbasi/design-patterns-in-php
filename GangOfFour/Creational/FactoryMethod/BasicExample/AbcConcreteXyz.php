<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class AbcConcreteXyz
 */
class AbcConcreteXyz implements XyzInterface
{

    /**
     * @return string
     */
    public function myOperation()
    {
        return 'AbcConcreteXyz işlemi tamam.';
    }

}