<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class Commandee
 */
class Commandee
{

    /**
     * @var MessageQueue
     */
    private $oMessageQueue;

    /**
     * @return void
     */
    public function __construct()
    {
        $this->oMessageQueue = new MessageQueue();
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue()
    {
        return $this->oMessageQueue;
    }

    /**
     * @return void
     */
    public function doAbc()
    {
        $this->oMessageQueue->pushMessage('Abc işi yapıldı.');
    }

    /**
     * @return void
     */
    public function doDef()
    {
        $this->oMessageQueue->pushMessage('Def işi yapıldı.');
    }

}