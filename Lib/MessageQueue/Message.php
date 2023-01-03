<?php

namespace DesignPatterns\Lib\MessageQueue;

/**
 * Class Message
 */
class Message
{

    /**
     * @var string Mesaj içeriği
     */
    private $content;

    /**
     * Message kurucu.
     * @param null|string $messageContent
     */
    public function __construct(?string $messageContent = null)
    {
        if ($messageContent !== null) {
            $this->set($messageContent);
        }
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Message
     */
    public function setContent(string $content): Message
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function get(): string
    {
        return $this->getContent();
    }

    /**
     * @param string $messageContent
     * @return Message
     */
    public function set(string $messageContent): Message
    {
        return $this->setContent($messageContent);
    }

}