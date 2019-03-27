<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class Client
 */
class Client
{

    /**
     * @param AbstractXyzCreator $oXyzCreator
     * @return string
     */
    protected static function doMyOperation(AbstractXyzCreator $oXyzCreator)
    {
        return $oXyzCreator->doMyOperation();
    }

    /**
     * @return string
     */
    public static function run()
    {
        $oMessageQueue = new MessageQueue();
        $oMessageQueue->pushMessage(
            self::doMyOperation(new AbcConcreteXyzCreator())
        );
        $oMessageQueue->pushMessage(
            self::doMyOperation(new DefConcreteXyzCreator())
        );
        return (string)$oMessageQueue;
    }

}