<?php

namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys;

use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\Car;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeyAbstractHandler;

/**
 * Class BodyworkMechanicsConcreteHandler
 */
class BodyworkMechanicsConcreteHandler extends GreaseMonkeyAbstractHandler
{

    /**
     * @param Car $oCar
     * @return void
     */
    protected function repair(Car $oCar)
    {
        $oCar->setBodyworkHealthy(TRUE);
    }

}