<?php

namespace DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample\Tests;

use DesignPatterns\GangOfFour\Behavioral\Mediator\BasicExample\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class ClientTest
 */
class ClientTest extends TestCase
{

    /**
     * @return void
     */
    public function testAraciKalibiDogruCalisiyorMu()
    {
        $oMessageQueue = Client::run();
        $actual = (string)$oMessageQueue;
        $expected = 'Rst işi yapıldı.' . PHP_EOL . 'Uvw işi yapıldı.' . PHP_EOL . 'Xyz işi yapıldı.';
        $this->assertSame($expected, $actual);
    }

}