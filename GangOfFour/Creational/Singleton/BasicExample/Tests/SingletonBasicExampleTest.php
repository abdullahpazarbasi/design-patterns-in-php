<?php

namespace DesignPatterns\GangOfFour\Creational\Singleton\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\Singleton\BasicExample\MySingleton;
use PHPUnit\Framework\TestCase;

class SingletonBasicExampleTest extends TestCase
{

    public function testCagirilanOturumGercektenSinifinOturumuMu(): void
    {
        $instance = MySingleton::getInstance();
        $this->assertInstanceOf(MySingleton::class, $instance);
    }

    public function testIlkReferansIleIkinciReferansAyniMi(): void
    {
        $firstReference = MySingleton::getInstance();
        $secondReference = MySingleton::getInstance();
        $this->assertSame($firstReference, $secondReference);
    }

}