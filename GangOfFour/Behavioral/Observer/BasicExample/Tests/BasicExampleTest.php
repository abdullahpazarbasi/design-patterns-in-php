<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Iterator\CarListIteratorExample\Tests;

use DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample\BasicExampleConcreteSubject;
use DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample\BasicExampleFirstConcreteObserver;
use DesignPatterns\GangOfFour\Behavioral\Observer\BasicExample\BasicExampleSecondConcreteObserver;
use DesignPatterns\Lib\MessageQueue\MessageQueue;
use PHPUnit\Framework\TestCase;

/**
 * Class BasicExampleTest
 */
class BasicExampleTest extends TestCase
{

    /**
     * @return void
     */
    public function testBagliGozlemcilerBilgilendiriliyorMu()
    {
        $oMessageQueue = new MessageQueue();
        $oFirstObserver = new BasicExampleFirstConcreteObserver();
        $oFirstObserver->setMessageQueue($oMessageQueue);
        $oSecondObserver = new BasicExampleSecondConcreteObserver();
        $oSecondObserver->setMessageQueue($oMessageQueue);
        //
        $oSubject = new BasicExampleConcreteSubject();
        //
        $oSubject->attach($oFirstObserver);
        $oSubject->attach($oSecondObserver);
        $oSubject->notify();
        $this->assertSame("Ben DesignPatterns\\GangOfFour\\Behavioral\\Observer\\BasicExample\\BasicExampleFirstConcreteObserver isimli sınıftan olan bir nesneyim. DesignPatterns\\GangOfFour\\Behavioral\\Observer\\BasicExample\\BasicExampleConcreteSubject sınfından olan bir nesne tarafından bilgilendirildim." . PHP_EOL . "Ben DesignPatterns\\GangOfFour\\Behavioral\\Observer\\BasicExample\\BasicExampleSecondConcreteObserver isimli sınıftan olan bir nesneyim. DesignPatterns\\GangOfFour\\Behavioral\\Observer\\BasicExample\\BasicExampleConcreteSubject sınfından olan bir nesne tarafından bilgilendirildim.", (string)$oMessageQueue);
    }

}