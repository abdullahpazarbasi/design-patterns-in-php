<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Interface MediatorInterface
 */
interface MediatorInterface
{

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doRstJobOfAbcConcreteColleague($oMessageQueue);

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doUvwJobOfDefConcreteColleague($oMessageQueue);

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doXyzJobOfGhiConcreteColleague($oMessageQueue);

}