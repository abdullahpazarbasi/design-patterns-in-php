<?php

namespace DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample;

/**
 * Class BasicExampleConcreteSubject
 */
class BasicExampleConcreteSubject implements BasicExampleSubjectInterface
{

    /**
     * @var null|\SplObjectStorage Bağlı gözlemciler listesi
     */
    private $oObservers;

    /**
     * BasicExampleConcreteSubject kurucu.
     */
    public function __construct()
    {
        $this->oObservers = new \SplObjectStorage();
    }

    /**
     * Gözlemciyi bağlar.
     *
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param BasicExampleObserverInterface $oObserver
     * @return void
     */
    public function attach(BasicExampleObserverInterface $oObserver)
    {
        $this->oObservers->attach($oObserver);
    }

    /**
     * Gözlemciyi kovar.
     *
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param BasicExampleObserverInterface $oObserver
     * @return void
     */
    public function detach(BasicExampleObserverInterface $oObserver)
    {
        $this->oObservers->detach($oObserver);
    }

    /**
     * Tüm bağlı gözlemcileri bilgilendirir.
     *
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     */
    public function notify()
    {
        foreach ($this->oObservers as $oObserver) {
            $oObserver->update($this);
        }
    }

}