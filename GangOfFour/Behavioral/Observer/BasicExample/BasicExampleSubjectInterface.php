<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample;

/**
 * Interface BasicExampleSubjectInterface
 */
interface BasicExampleSubjectInterface
{

    /**
     * Gözlemciyi bağlar.
     *
     * @link http://php.net/manual/en/splsubject.attach.php
     * @param BasicExampleObserverInterface $oObserver
     * @return void
     */
    public function attach(BasicExampleObserverInterface $oObserver);

    /**
     * Gözlemciyi kovar.
     *
     * @link http://php.net/manual/en/splsubject.detach.php
     * @param BasicExampleObserverInterface $oObserver
     * @return void
     */
    public function detach(BasicExampleObserverInterface $oObserver);

    /**
     * Tüm bağlı gözlemcileri bilgilendirir.
     *
     * @link http://php.net/manual/en/splsubject.notify.php
     * @return void
     */
    public function notify();

}