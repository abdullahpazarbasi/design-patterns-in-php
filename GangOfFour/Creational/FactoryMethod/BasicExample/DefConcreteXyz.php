<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

/**
 * Class DefConcreteXyz
 */
class DefConcreteXyz implements XyzInterface
{

    /**
     * @return string
     */
    public function myOperation()
    {
        return 'DefConcreteXyz işlemi tamam.';
    }

}