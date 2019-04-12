<?php

namespace DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample\Tests;

use DesignPatterns\GangOfFour\Behavioral\Memento\BasicExample\Client;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * Class MementoBasicExampleTest
 */
class MementoBasicExampleTest extends TestCase
{

    /**
     * @return void
     * @throws Exception
     */
    public function testHatiraKalibiDogruCalisiyorMu()
    {
        $messageQueue = Client::run();
        $actual = (string)$messageQueue;
        $expected = 'state 1' . PHP_EOL . 'state 1' . PHP_EOL . 'state 2' . PHP_EOL . 'state 1' . PHP_EOL . 'state 2' . PHP_EOL . 'state 3' . PHP_EOL . 'state 4' . PHP_EOL . 'state 3';
        $this->assertSame($expected, $actual);
    }

}