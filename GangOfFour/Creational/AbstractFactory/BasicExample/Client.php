<?php

namespace DesignPatterns\GangOfFour\Creational\AbstractFactory\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

class Client
{

    public static function run(): string
    {
        $oneXyzFactory = new ConcreteOneXyzFactory();
        $twoXyzFactory = new ConcreteTwoXyzFactory();
        $messageQueue = new MessageQueue();
        $messageQueue->pushMessage($oneXyzFactory->createAbc()->operateJkl());
        $messageQueue->pushMessage($oneXyzFactory->createDef()->operateMno());
        $messageQueue->pushMessage($twoXyzFactory->createAbc()->operateJkl());
        $messageQueue->pushMessage($twoXyzFactory->createDef()->operateMno());

        return (string)$messageQueue;
    }

}