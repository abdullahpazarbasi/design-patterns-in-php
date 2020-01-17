<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\Lib\MessageQueue;

use SplObjectStorage;

/**
 * Class MessageQueue
 */
class MessageQueue
{

    /**
     * @var null|SplObjectStorage Mesaj listesi
     */
    private $messageStorage;

    /**
     * MessageQueue kurucu.
     */
    public function __construct()
    {
        $this->messageStorage = new SplObjectStorage();
    }

    /**
     * @param Message $message
     * @return static
     */
    public function push(Message $message): MessageQueue
    {
        $this->messageStorage->attach($message);
        return $this;
    }

    /**
     * @return Message
     */
    public function pull(): Message
    {
        $oMessage = reset($this->messageStorage);
        $this->messageStorage->detach($oMessage);
        return $oMessage;
    }

    /**
     * @param string $messageContent
     * @return static
     */
    public function pushMessage(string $messageContent): MessageQueue
    {
        return $this->push(new Message($messageContent));
    }

    /**
     * @return string
     */
    public function concatenateMessages(): string
    {
        $asMessage = [];
        foreach ($this->messageStorage as $oMessage) {
            $asMessage[] = $oMessage->get();
        }
        return implode(PHP_EOL, $asMessage);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->concatenateMessages();
    }

}