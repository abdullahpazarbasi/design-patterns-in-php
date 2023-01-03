<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class Client
 */
class Client
{

    /**
     * @return MessageQueue
     */
    public static function run()
    {
        $oMessageQueue = new MessageQueue();
        $abcColleague = new AbcConcreteColleague();
        $defColleague = new DefConcreteColleague();
        $ghiColleague = new GhiConcreteColleague();
        $oMediator = new ConcreteMediator($abcColleague, $defColleague, $ghiColleague);
        $oMediator->doRstJobOfAbcConcreteColleague($oMessageQueue);
        return $oMessageQueue;
    }

}