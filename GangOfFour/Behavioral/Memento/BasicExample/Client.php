<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;
use Exception;

/**
 * Class Client
 */
class Client
{

    /**
     * @return MessageQueue
     * @throws Exception
     */
    public static function run()
    {
        $originator = new Originator('state 1', 'state 1');
        $caretaker = new Caretaker($originator);
        $originator->setData1('state 2');
        $originator->setData2('state 3');
        $originator->setData1('state 4');
        $originator->setData2('state 5');
        $caretaker->rollback();
        $messageQueue = new MessageQueue();
        foreach ($caretaker->getHistory() as $memento) {
            $messageQueue->pushMessage($memento->getData1());
            $messageQueue->pushMessage($memento->getData2());
        }
        return $messageQueue;
    }

}