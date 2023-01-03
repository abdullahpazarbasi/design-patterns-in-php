<?php

namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample;

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
        $commandee = new Commandee();
        $abcInvoker = new Invoker(new AbcConcreteCommand($commandee));
        $abcInvoker->run();
        $defInvoker = new Invoker(new DefConcreteCommand($commandee));
        $defInvoker->run();
        return $commandee->getMessageQueue();
    }

}