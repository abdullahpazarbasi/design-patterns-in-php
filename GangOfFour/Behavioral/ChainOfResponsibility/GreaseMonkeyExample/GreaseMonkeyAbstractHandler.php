<?php

namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample;

use DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample\Cars\Car;

/**
 * Class GreaseMonkeyAbstractHandler
 */
abstract class GreaseMonkeyAbstractHandler implements MechanicsHandlerInterface
{

    /**
     * @var MechanicsHandlerInterface
     */
    private $oNextHandler;

    /**
     * @param MechanicsHandlerInterface $oHandler
     * @return MechanicsHandlerInterface
     */
    public function setNext(MechanicsHandlerInterface $oHandler): MechanicsHandlerInterface
    {
        $this->oNextHandler = $oHandler;
        return $oHandler;
    }

    /**
     * @param MechanicalThing $oCar
     * @return void
     */
    public function handle(MechanicalThing $oCar)
    {
        // Araba tamircisiyim. Araba kabul ederim.
        if (!($oCar instanceof Car)) {
            return;
        }
        $this->repair($oCar);
        // Sıradaki tamirciye gönder
        if ($this->oNextHandler instanceof GreaseMonkeyAbstractHandler) {
            $this->oNextHandler->handle($oCar);
        }
    }

    /**
     * @param Car $oCar
     * @return void
     */
    abstract protected function repair(Car $oCar);

}