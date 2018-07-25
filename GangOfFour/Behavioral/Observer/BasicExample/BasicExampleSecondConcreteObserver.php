<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample;

use DesignPatterns\Lib\MessageQueue\MessageQueue;

/**
 * Class BasicExampleSecondConcreteObserver
 */
class BasicExampleSecondConcreteObserver implements BasicExampleObserverInterface
{

    /**
     * @var null|MessageQueue
     */
    private $oMessageQueue;

    /**
     * Özneden güncelleme alır.
     *
     * @link http://php.net/manual/en/splobserver.update.php
     * @param BasicExampleSubjectInterface $oSubject
     * @return void
     */
    public function update(BasicExampleSubjectInterface $oSubject)
    {
        $this->oMessageQueue->pushMessage('Ben ' . __CLASS__ . ' isimli sınıftan olan bir nesneyim. ' . get_class($oSubject) . ' sınfından olan bir nesne tarafından bilgilendirildim.');
    }

    /**
     * @return MessageQueue|null
     */
    public function getMessageQueue(): ?MessageQueue
    {
        return $this->oMessageQueue;
    }

    /**
     * @param MessageQueue|null $oMessageQueue
     * @return BasicExampleSecondConcreteObserver
     */
    public function setMessageQueue(?MessageQueue $oMessageQueue): BasicExampleSecondConcreteObserver
    {
        $this->oMessageQueue = $oMessageQueue;
        return $this;
    }

}