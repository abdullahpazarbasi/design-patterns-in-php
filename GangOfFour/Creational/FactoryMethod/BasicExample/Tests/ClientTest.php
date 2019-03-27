<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample\Tests;

use DesignPatterns\GangOfFour\Creational\FactoryMethod\BasicExample\Client;
use PHPUnit\Framework\TestCase;

/**
 * Class ClientTest
 */
class ClientTest extends TestCase
{

    /**
     * @return void
     */
    public function testFabrikaMetodu()
    {
        $sMessages = Client::run();
        $this->assertSame('AbcConcreteXyz işlemi tamam.' . PHP_EOL . 'DefConcreteXyz işlemi tamam.', $sMessages);
    }

}