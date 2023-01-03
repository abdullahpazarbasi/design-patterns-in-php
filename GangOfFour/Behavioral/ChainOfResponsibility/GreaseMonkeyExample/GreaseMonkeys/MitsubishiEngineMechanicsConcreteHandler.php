<?php

namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeys;

use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\Car;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\MitsubishiCar;
use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\GreaseMonkeyAbstractHandler;

/**
 * Class MitsubishiEngineMechanicsConcreteHandler
 */
class MitsubishiEngineMechanicsConcreteHandler extends GreaseMonkeyAbstractHandler
{

    /**
     * @param Car $oCar
     * @return void
     */
    protected function repair(Car $oCar)
    {
        // Yalnızca Mitsubishi marka araçlara bakıyorum.
        if (!($oCar instanceof MitsubishiCar)) {
            return;
        }
        $oCar->setEngineHealthy(TRUE);
    }

}