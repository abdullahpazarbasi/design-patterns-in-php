<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class Client
 */
class Client
{

    protected static function doMyOperation(AbstractXyzCreator $oXyzCreator): string
    {
        return $oXyzCreator->doMyOperation();
    }

    public static function run(): string
    {
        $messageQueue = new MessageQueue();
        $messageQueue->pushMessage(
            self::doMyOperation(new AbcConcreteXyzCreator())
        );
        $messageQueue->pushMessage(
            self::doMyOperation(new DefConcreteXyzCreator())
        );

        return (string)$messageQueue;
    }

}