<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Behavioral\Command\BasicExample\Tests;

use DesignPatterns\GangOfFour\Behavioral\Command\BasicExample\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class ClientTest
 */
class ClientTest extends TestCase
{

    /**
     * @return void
     */
    public function testKomutKalibiDogruCalisiyorMu()
    {
        $oMessageQueue = Client::run();
        $actual = (string)$oMessageQueue;
        $expected = 'Abc işi yapıldı.' . PHP_EOL . 'Def işi yapıldı.';
        $this->assertSame($expected, $actual);
    }

}