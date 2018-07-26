<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\ChainOfResponsibility\GreaseMonkeyExample;

/**
 * Interface MechanicsHandlerInterface
 */
interface MechanicsHandlerInterface
{

    /**
     * @param MechanicsHandlerInterface $oHandler
     * @return MechanicsHandlerInterface
     */
    public function setNext(MechanicsHandlerInterface $oHandler): MechanicsHandlerInterface;

    /**
     * @param MechanicalThing $oRequest
     * @return void
     */
    public function handle(MechanicalThing $oRequest);

}