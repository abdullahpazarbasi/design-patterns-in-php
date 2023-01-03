<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class GhiConcreteColleague
 */
class GhiConcreteColleague extends AbstractColleague
{

    /**
     * @param MessageQueue $oMessageQueue
     * @return void
     */
    public function doXyzJob($oMessageQueue)
    {
        $oMessageQueue->pushMessage('Xyz işi yapıldı.');
    }

}