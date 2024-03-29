<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class AbcConcreteColleague
 */
class AbcConcreteColleague extends AbstractColleague
{

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doRstJob($oMessageQueue)
    {
        $oMessageQueue->pushMessage('Rst işi yapıldı.');
    }

}