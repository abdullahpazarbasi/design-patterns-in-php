<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Creational\Singleton\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\Singleton\BasicExample\MySingleton;
use PHPUnit\Framework\TestCase;

/**
 * Class MySingletonTest
 */
class MySingletonTest extends TestCase
{

    /**
     * @return void
     */
    public function testCagirilanOturumGercektenSinifinOturumuMu()
    {
        $oInstance = MySingleton::getInstance();
        $this->assertInstanceOf(MySingleton::class, $oInstance);
    }

    /**
     * @return void
     */
    public function testIlkReferansIleIkinciReferansAyniMi()
    {
        $oFirstReference = MySingleton::getInstance();
        $oSecondReference = MySingleton::getInstance();
        $this->assertSame($oFirstReference, $oSecondReference);
    }

}