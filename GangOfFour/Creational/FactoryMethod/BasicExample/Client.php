<?php

namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

class Client
{

    protected static function doMyOperation(AbstractXyzCreator $creator): string
    {
        return $creator->doMyOperation();
    }

    public static function run(): string
    {
        $messageQueue = new MessageQueue();
        $messageQueue->pushMessage(
            self::doMyOperation(new ConcreteAbcXyzCreator())
        );
        $messageQueue->pushMessage(
            self::doMyOperation(new ConcreteDefXyzCreator())
        );

        return (string)$messageQueue;
    }

}