<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\Lib\MessageQueue;

/**
 * Class MessageQueue
 */
class MessageQueue
{

    /**
     * @var null|\SplObjectStorage Mesaj listesi
     */
    private $oMessages;

    /**
     * MessageQueue kurucu.
     */
    public function __construct()
    {
        $this->oMessages = new \SplObjectStorage();
    }

    /**
     * @param Message $oMessage
     * @return static
     */
    public function push(Message $oMessage): MessageQueue
    {
        $this->oMessages->attach($oMessage);
        return $this;
    }

    /**
     * @return Message
     */
    public function pull(): Message
    {
        $oMessage = reset($this->oMessages);
        $this->oMessages->detach($oMessage);
        return $oMessage;
    }

    /**
     * @param string $sMessageContent
     * @return static
     */
    public function pushMessage(string $sMessageContent): MessageQueue
    {
        return $this->push(new Message($sMessageContent));
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        $asMessage = [];
        foreach ($this->oMessages as $oMessage) {
            $asMessage[] = $oMessage->get();
        }
        return implode(PHP_EOL, $asMessage);
    }

}