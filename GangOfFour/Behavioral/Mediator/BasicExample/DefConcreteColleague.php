<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class DefConcreteColleague
 */
class DefConcreteColleague extends AbstractColleague
{

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doUvwJob($oMessageQueue)
    {
        $oMessageQueue->pushMessage('Uvw işi yapıldı.');
    }

}