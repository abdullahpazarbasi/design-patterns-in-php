<?php

namespace DesignPatterns\Lib\MessageQueue;

use SplObjectStorage;

class MessageQueue
{

    /**
     * @var null|SplObjectStorage Mesaj listesi
     */
    private ?SplObjectStorage $messageStorage;

    /**
     * MessageQueue kurucu.
     */
    public function __construct()
    {
        $this->messageStorage = new SplObjectStorage();
    }

    /**
     * @param Message $message
     * @return MessageQueue
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
        $message = reset($this->messageStorage);
        $this->messageStorage->detach($message);

        return $message;
    }

    /**
     * @param string $messageContent
     * @return MessageQueue
     */
    public function pushMessage(string $messageContent): MessageQueue
    {
        return $this->push(new Message($messageContent));
    }

    public function concatenateMessages(): string
    {
        $messages = [];
        foreach ($this->messageStorage as $message) {
            $messages[] = $message->get();
        }

        return implode(PHP_EOL, $messages);
    }

    public function __toString(): string
    {
        return $this->concatenateMessages();
    }

}