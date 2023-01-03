<?php

namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys;

use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\Car;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\FordCar;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeyAbstractHandler;

/**
 * Class FordGearBoxMechanicsConcreteHandler
 */
class FordGearBoxMechanicsConcreteHandler extends GreaseMonkeyAbstractHandler
{

    /**
     * @param Car $oCar
     * @return void
     */
    protected function repair(Car $oCar)
    {
        // Yalnızca Ford marka araçlara bakıyorum.
        if (!($oCar instanceof FordCar)) {
            return;
        }
        $oCar->setGearBoxHealthy(TRUE);
    }

}