<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\Lib\MessageQueue;

/**
 * Class Message
 */
class Message
{

    /**
     * @var string Mesaj içeriği
     */
    private $sContent;

    /**
     * Message kurucu.
     * @param null|string $sMessageContent
     */
    public function __construct(?string $sMessageContent = NULL)
    {
        if ($sMessageContent !== NULL) {
            $this->set($sMessageContent);
        }
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->sContent;
    }

    /**
     * @param string $sContent
     * @return Message
     */
    public function setContent(string $sContent): Message
    {
        $this->sContent = $sContent;
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
     * @param string $sMessage
     * @return Message
     */
    public function set(string $sMessage): Message
    {
        return $this->setContent($sMessage);
    }

}